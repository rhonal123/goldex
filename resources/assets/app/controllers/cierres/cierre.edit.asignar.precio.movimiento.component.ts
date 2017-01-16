import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Movimiento } from './../../models/movimiento';
import { MovimientoService } from './../../services/movimiento.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';
import { JqueryComponent } from './../jquery.component';
import { CierreEditComponent } from './cierre.edit.component'

@Component({
  selector: 'cierre-edit-asignar-precio-movimiento-component',
  template: `
<div class="modal-body">
  <div class="panel-body" *ngIf="movimiento">
    <div class="col-md-12">
    <detalle [nombre]="'Fecha :'" [contenido]="movimiento.fecha" ></detalle>
    <detalle [nombre]="'Tipo :'" [contenido]="movimiento.tipo" ></detalle>
    <detalle [nombre]="'Referencia :'" [contenido]="movimiento.referencia" *ngIf="transferencia()" ></detalle>
    <detalle [nombre]="'Cuenta  :'" [contenido]="movimiento.cuenta|detalleCuenta" *ngIf="transferencia()" ></detalle>
    <detalle [nombre]="'Estado  :'" [contenido]="movimiento.estado" ></detalle>
    </div>
    <form [formGroup]="movimientoForm" (ngSubmit)="guardar()" class="form-horizontal">
      <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.monto}">
        <label for="monto" class="col-md-2 control-label" for="monto"> Monto </label>
        <div class="col-md-8">
          <input  id="monto" type="number" class="form-control" formControlName="monto" [(ngModel)]="monto" (keyup)="actualizarSaldo()">
          <span  *ngIf="formErrors.monto" class="help-block">{{ formErrors.monto}}</span>
        </div>
       <label class="col-md-2 control-label" for="monto"> Bs. </label>
      </div>
      <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.precio_puro}">
        <label for="precio_puro" class="col-md-2 control-label" for="precio_puro"> Precio Puro </label>
        <div class="col-md-8">
          <input  id="precio_puro" type="number" class="form-control" formControlName="precio_puro" [(ngModel)]="precio_puro" (keyup)="actualizarSaldo()">
          <span  *ngIf="formErrors.precio_puro" class="help-block">{{ formErrors.precio_puro}}</span>
        </div>
       <label class="col-md-2 control-label" for="precio_puro"> Bs. </label>
      </div>
      <div [ngClass]="{'form-group': true,'col-md-12': true}" >
        <div class="col-md-5 pull-right" >
          <h4 class="page-header"><strong>Totales :</strong></h4>
          <table class="table table-hover">
            <tr>
              <td style="text-align: right;"><strong> Monto : </strong></td>
              <td style="text-align: left;"> <strong> {{monto|number:'1.2-2'}} Bs.</strong></td>
            </tr>
            <tr>
              <td style="text-align: right;"><strong> Precio Puro : </strong></td>
              <td style="text-align: left;"> <strong> {{precio_puro|number:'1.2-2'}} Bs.</strong></td>
            </tr>
            <tr>
              <td style="text-align: right;"><strong> Gramos : </strong></td>
              <td style="text-align: left;"> <strong> {{gramos|number:'1.2-2'}} grams.</strong></td>
            </tr>
            <tr>
              <td style="text-align: right;"><strong> Total : </strong></td>
              <td style="text-align: left;"> <strong> {{saldo|number:'1.2-2'}} Bs.</strong></td>
            </tr>
          </table>
        </div>
        <div class="col-md-12">
          <div class="btn-group  pull-right">
            <input type="button" class="btn btn-danger" (click)="onCancelar()" value="Cancelar">
            <input type="button" class="btn btn-primary" (click)="onGuardar()" value="Guardar">
           </div>
        </div>
      </div>  
    </form>
  </div>
</div>`,
  providers: [MovimientoService]
})
export class CierreEditAsignarPrecioMovimientoComponent implements OnInit {

  private movimientoForm: FormGroup;
  private cierreEditComponent : CierreEditComponent;
  private movimiento: Movimiento;

  private saldo: number =0.0;
  private monto: number=0.0;
  private gramos: number = 0.0;
  private precio_puro: number =0.0;

  private formErrors: any = {
    'id':'',
    'monto':'',
    'precio_puro':''
  };

  constructor(private movimientoService: MovimientoService, private fB: FormBuilder ) {

  }

  onValueChanged(data?: any) {
    if (!this.movimientoForm) { return; }
    for (const field in this.formErrors) {
      this.formErrors[field] = '';
    }
  }

  onGuardar(): void
  {
    let movimiento = this.movimientoForm.value;
    this.movimientoService.actualizarPrecioPuro(movimiento).then(movimiento => {
      this.cierreEditComponent.agregarEditarMovimiento(movimiento);
    }).catch((errores)=>{
      this.formErrors['id'] =  errores.id;
      this.formErrors['monto'] =  errores.monto;
      this.formErrors['precio_puro'] =  errores.precio_puro;
    });
  }

  ngOnInit(): void {
		this.formBuilder();
  }

  formBuilder(): void {
    this.movimientoForm = this.fB.group({
      'id':'',
      'monto':'',
      'precio_puro':''
    });
   this.movimientoForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  setModel(movimiento: Movimiento,cierreEditComponent: CierreEditComponent): void {
    this.cierreEditComponent = cierreEditComponent
    this.movimiento = movimiento
    this.saldo = this.movimiento.saldo || 0
    this.monto = this.movimiento.monto || 0
    this.precio_puro = this.movimiento.precio_puro || 0 

    if(this.precio_puro == 0){
      this.gramos = 0.0
    }
    else{
      this.gramos = this.saldo/this.precio_puro
    }
    this.movimientoForm.setValue({
      'id': movimiento.id || '',
      'monto': movimiento.monto || '',
      'precio_puro': movimiento.precio_puro || '',
    });
  }

  actualizarSaldo(){
    this.saldo = ( (this.movimiento.comision/100) + 1) * this.monto; 
    this.gramos = (this.saldo / this.precio_puro);
  }

  transferencia(): boolean {
    return (this.movimiento.tipo === "TRANSFERENCIA"? true:false);
  }

  onCancelar() :void {
    this.cierreEditComponent.onActivarCierre()
  }


}
   
 