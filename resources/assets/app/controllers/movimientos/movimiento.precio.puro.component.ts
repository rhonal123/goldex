import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Movimiento } from './../../models/movimiento';
import { MovimientoService } from './../../services/movimiento.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { MovimientosComponent } from './movimientos.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';
import { JqueryComponent } from './../jquery.component';

@Component({
  selector: 'movimiento-precio-puro-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
<div class="modal-dialog" style="width:95%; height:80%;" >
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" (click)="hideModal()" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <h4 class="modal-title">Actualizar Precio Movimiento</h4>
</div>
<div class="modal-body">
  <div class="panel-body" *ngIf="movimiento">
    <div class="col-md-12">
    <detalle [nombre]="'Negocio :'" [contenido]="movimiento.negocio|detalleNegocio" ></detalle>
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
        <div class="col-md-12"  >
          <input type="button" class="btn btn-primary pull-right" (click)="guardar()" value="Guardar">
        </div>
      </div>  

    </form>
  </div>
</div> <!-- end modal body  --> 
</div>
</div>
</div>

  `,
  providers: [MovimientoService]
})
export class MovimientoPrecioPuroComponent implements OnInit {

  @ViewChild('modal')  modal: ModalDirective;
  
  private movimientoForm: FormGroup;
  private component : MovimientosComponent;

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

  guardar(): void
  {
    let movimiento = this.movimientoForm.value;
    this.movimientoService.actualizarPrecioPuro(movimiento).then(movimiento => {
      this.component.changeTable(movimiento);
      this.hideModal();
    }).catch((errores)=>{
      this.formErrors['id'] =  errores.id;
      this.formErrors['monto'] =  errores.monto;
      this.formErrors['precio_puro'] =  errores.precio_puro;
    });
  }


  ngOnInit(): void {
		this.formBuilder();
  }

  formBuilder(): void 
  {
    this.movimientoForm = this.fB.group({
      'id':'',
      'monto':'',
      'precio_puro':''
    });
   this.movimientoForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  hideModal(): void {
    this.modal.hide();
    this.movimiento = null;
    this.saldo=0.0;
    this.monto=0.0;
    this.gramos= 0.0;
    this.precio_puro =0.0;
  }

  setModel(movimiento: Movimiento): void {

    this.movimiento = movimiento;
    this.saldo = this.movimiento.saldo;
    this.monto = this.movimiento.monto;
    this.precio_puro = this.movimiento.precio_puro;

    if(this.precio_puro == 0 || this.precio_puro == undefined){
      this.gramos = 0.0
    }
    else{
      this.gramos = this.saldo / this.precio_puro
    }

    this.movimientoForm.setValue({
      'id': movimiento.id || '',
      'monto': movimiento.monto || '',
      'precio_puro': movimiento.precio_puro || '',
    });

  }

  openModal(component: MovimientosComponent) :void {
    this.component = component;
    this.modal.show();
  }

  actualizarSaldo(){
    this.saldo = ( (this.movimiento.comision/100) + 1) * this.monto; 
    this.gramos = (this.saldo / this.precio_puro);
  }

  transferencia():boolean {
    return (this.movimiento.tipo === "TRANSFERENCIA"? true:false);
  }


}
   
 