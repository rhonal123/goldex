import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Movimiento } from './../../models/movimiento';
import { MovimientoService } from './../../services/movimiento.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { MovimientosComponent } from './movimientos.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';
import { JqueryComponent } from './../jquery.component';

@Component({
  selector: 'movimiento-edit-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
<div class="modal-dialog" style="width:95%; height:80%;" >
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" (click)="hideModal()" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <h4 class="modal-title">Editar Movimiento</h4>
</div>
<div class="modal-body">
  <div class="panel-body" *ngIf="movimiento">
    <form [formGroup]="movimientoForm" (ngSubmit)="guardar()" class="form-horizontal">
      
      <div [ngClass]="{'form-group': true, 'col-md-6': true,'has-error': formErrors.negocio_id}"  >
        <label for="negocio_id" class="col-sm-2 control-label" for="estado">Negocio o Socio </label>
        <div class="col-sm-10">
          <select id="negocio_id" class="form-control"></select>
          <span  *ngIf="formErrors.negocio_id" class="help-block">{{ formErrors.negocio_id}}</span>
        </div> 
      </div>

      <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.tipo}">
        <label for="tipo" class="col-md-2 control-label" for="tipo">Tipo</label>
        <div class="col-md-10">
          <select id="tipo" formControlName="tipo" class="form-control"  [(ngModel)]="tipo" (click)="cambiarTipo()"> 
            <option values="TRANSFERENCIA">TRANSFERENCIA</option>
            <option values="EFECTIVO">EFECTIVO</option>
          </select>
          <span  *ngIf="formErrors.tipo" id="errornombre" class="help-block">{{ formErrors.tipo}}</span>
        </div>
      </div>


      <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.fecha}"  >
        <label for="fecha" class="col-md-2 control-label" for="tipo">Fecha</label>
        <div class="col-md-10">
          <input id="fecha" type="text" data-provide="datepicker" class="form-control input-sm" >
          <span  *ngIf="formErrors.fecha" id="errornombre" class="help-block">{{ formErrors.fecha}}</span>
        </div>
      </div>


      <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.monto}">
        <label for="monto" class="col-md-2 control-label" for="monto"> Monto </label>
        <div class="col-md-8">
          <input  id="monto" type="number" class="form-control" formControlName="monto" [(ngModel)]="monto" (keyup)="actualizarSaldo()">
          <span  *ngIf="formErrors.monto" id="errornombre" class="help-block">{{ formErrors.monto}}</span>
        </div>
       <label class="col-md-2 control-label" for="monto"> Bs. </label>
      </div>

      <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.cuenta_id}"  *ngIf=" tipo=='TRANSFERENCIA'">
        <label for="cuenta_id" class="col-md-2 control-label" for="tipo">Cuenta</label>
        <div class="col-md-10">
          <select id="cuenta_id" class="form-control"></select>
          <span  *ngIf="formErrors.cuenta_id" id="errornombre" class="help-block">{{ formErrors.cuenta_id}}</span>
        </div>
      </div>

      <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.referencia}"  *ngIf=" tipo == 'TRANSFERENCIA' ">
        <label for="referencia" class="col-md-2 control-label" for="referencia">Referencia </label>
        <div class="col-md-10">
          <input  id="referencia" type="text" class="form-control" formControlName="referencia">
          <span  *ngIf="formErrors.referencia" id="errornombre" class="help-block">{{ formErrors.referencia}}</span>
        </div>
      </div>

      <div [ngClass]="{'form-group': true,'col-md-setoff-6':true, 'col-md-6': true,'has-error': formErrors.comision}" *ngIf=" tipo == 'EFECTIVO' "  >
        <label for="comision" class="col-md-2 control-label" for="comision"> Comision </label>
        <div class="col-md-6">
          <input  id="comision" type="number" class="form-control" formControlName="comision" [(ngModel)]="comision" (keyup)="actualizarSaldo()">
          <span  *ngIf="formErrors.comision" id="errornombre" class="help-block">{{ formErrors.comision}}</span>
        </div>
        <label  class="col-md-4 control-label" for="comision">%</label>
      </div>


      <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.descripcion}"  >
        <label for="descripcion" class="col-md-2 control-label" for="tipo">Descripción </label>
        <div class="col-md-10">
          <textarea id="descripcion" type="text" class="form-control" formControlName="descripcion" row="4" > </textarea> 
          <span  *ngIf="formErrors.descripcion" id="errornombre" class="help-block">{{ formErrors.descripcion}}</span>
        </div>
      </div>
       <div [ngClass]="{'form-group': true,'col-md-12': true}" >
        <div class="col-md-5 pull-right" >
          <h4 class="page-header"><strong>Totales :</strong></h4>
          <table class="table table-hover">
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
export class MovimientoEditComponent implements OnInit {

  @ViewChild('modal')  modal: ModalDirective;
  
  private movimientoForm: FormGroup;
  private component : MovimientosComponent;
  private jcuenta: any;
  private jbancoDestino: any;
  private jnegocio: any;
  private jfecha: any;
  private movimiento: Movimiento;
  private tipo: string = "";

  private saldo: number =0.0;
  private comision: number=0.0;
  private monto: number=0.0;

  private formErrors: any = {
    'id':'',
    'monto':'',
    'comision':'',
    'fecha':'',
    'descripcion':'',
    'tipo':'',
    'referencia':'',
    'estado':'',
    'negocio_id':'',
    'cuenta_id':'',
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
    movimiento.cuenta_id = this.jcuenta.val();
    movimiento.negocio_id =  this.jnegocio.val();
    movimiento.fecha =  this.jfecha.val();
    movimiento.comision = this.comision;    
    this.movimientoService.guardar(movimiento).then(movimiento => {
      this.component.changeTable(movimiento);
      this.hideModal();
    }).catch((errores)=>{
      this.formErrors['id'] =  errores.id;
      this.formErrors['monto'] =  errores.monto;
      this.formErrors['comision'] =  errores.comision;
      this.formErrors['fecha'] =  errores.fecha;
      this.formErrors['descripcion'] =  errores.descripcion;
      this.formErrors['tipo'] =  errores.tipo;
      this.formErrors['referencia'] =  errores.referencia;
      this.formErrors['estado'] =  errores.estado;
      this.formErrors['negocio_id'] =  errores.negocio_id;
      this.formErrors['cuenta_id'] =  errores.cuenta_id;
    });
  }


  ngOnInit(): void {
		this.formBuilder();
    this.modal.onShown.subscribe((event : any) => {
      this.jfecha = JqueryComponent.fecha("form #fecha",this.movimiento.fecha);
      this.jcuenta =  JqueryComponent.cuentas("form #cuenta_id",this.movimiento.cuenta);
      this.jnegocio = JqueryComponent.negocios("form #negocio_id",this.movimiento.negocio);
    });
  }

  formBuilder(): void 
  {
    this.movimientoForm = this.fB.group({
      'id':'',
      'monto':'',
      'comision':'',
      'fecha':'',
      'descripcion':'',
      'tipo':'',
      'referencia':'',
      'estado':'',
      'negocio_id':'',
      'cuenta_id':'',
    });
   this.movimientoForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  hideModal(): void {
    this.modal.hide();
  }

  setModel(movimiento: Movimiento): void {
    this.movimiento = movimiento;
    this.saldo = this.movimiento.saldo || 0;
    this.monto = this.movimiento.monto || 0;
    this.comision = this.movimiento.comision || 0;
    this.movimientoForm.setValue({
      'id': this.movimiento.id || '',
      'monto': this.movimiento.monto|| '',
      'comision': this.movimiento.comision || '',
      'fecha': this.movimiento.fecha || '',
      'descripcion': this.movimiento.descripcion || '',
      'tipo': this.movimiento.tipo || '',
      'referencia': this.movimiento.referencia || '',
      'estado': this.movimiento.estado || '',
      'negocio_id': this.movimiento.negocio_id || '',
      'cuenta_id': this.movimiento.cuenta_id || '',
    });
  }

  openModal(component: MovimientosComponent) :void {
    this.component = component;
    this.modal.show();
  }

  actualizarSaldo(){
    this.comision = (Math.abs(this.comision) <= 100? Math.abs(this.comision) : 0 );
    this.saldo = ( (this.comision/100) + 1) * this.monto; 
  }
  cambiarTipo(){
    if(this.tipo === "TRANSFERENCIA"){
      this.comision = 0.0;
      this.jcuenta =  JqueryComponent.cuentas("form #cuenta_id",this.movimiento.cuenta);
      this.actualizarSaldo();
    }
  }
}
   
 