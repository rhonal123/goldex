import { Component, Input, OnInit, ViewChild, ChangeDetectorRef, EventEmitter, Output } from '@angular/core';
import { Router } from '@angular/router';
import { Abono } from './../../models/abono';
import { AbonoService } from './../../services/abono.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';
import { JqueryComponent } from './../jquery.component';
import { TabsModule } from 'ng2-bootstrap/components/tabs';
import { CierreEditComponent } from './cierre.edit.component'
@Component({
  selector: 'cierre-edit-abono-component',
  template: `
<div class="panel-body">
  <h4 class="page-header" *ngIf="abono.id"><strong> Editar Abono :</strong></h4>
  <h4 class="page-header" *ngIf="!abono.id"><strong> Agregar Nuevo Abono :</strong></h4>
  <form [formGroup]="abonoForm" (ngSubmit)="guardar()" class="form-horizontal">
    <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.tipo_id}">
      <label for="tipo_id" class="col-md-2 control-label" for="tipo_id">Tipo :</label>
      <div class="col-md-10">
        <select id="tipo_id" class="form-control"></select>
        <span  *ngIf="formErrors.tipo_id" class="help-block">{{ formErrors.tipo_id}}</span>
      </div> 
    </div>
    <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.fecha}">
      <label for="fecha" class="col-md-2 control-label" for="tipo">Fecha</label>
      <div class="col-md-10">
        <input id="fecha" type="text" data-provide="datepicker" class="form-control " >
        <span  *ngIf="formErrors.fecha" id="errornombre" class="help-block">{{ formErrors.fecha}}</span>
      </div>
    </div>
    <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.tasa}">
      <label for="tasa" class="col-md-2 control-label" for="tasa"> Tasa </label>
      <div class="col-md-8">
        <input id="tasa" type="number" class="form-control" formControlName="tasa" placeholder="000.000,00" [(ngModel)]="tasa" (keyup)="calcularMonto()" >
        <span  *ngIf="formErrors.tasa" id="errornombre" class="help-block">{{ formErrors.tasa}}</span>
      </div>
      <label class="col-md-2" style="padding-left: 0px;padding-top: 10px;">Bs.</label>
    </div>
    <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.afecta_banco}" *ngIf="divisa">
      <label for="afecta_banco" class="col-md-2 control-label" for="tipo">Afecta Banco</label>
      <div class="col-md-10">
        <select id="afecta_banco" formControlName="afecta_banco" class="form-control" [(ngModel)]="afecta_banco" (click)="cambiarAfectaBanco()" > 
          <option value="false">Efectivo</option>
          <option value="true">Afecta Banco</option>
        </select>
        <span *ngIf="formErrors.tipo" id="errornombre" class="help-block">{{ formErrors.tipo}}</span>
      </div>
    </div>
    <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.cantidad}">
      <label for="cantidad" class="col-md-2 control-label" for="cantidad"> Cantidad </label>
      <div class="col-md-8">
        <input  id="cantidad" type="number" class="form-control" formControlName="cantidad" placeholder="000.000,00" [(ngModel)]="cantidad" (keyup)="calcularMonto()">
        <span  *ngIf="formErrors.cantidad" id="errornombre" class="help-block">{{ formErrors.cantidad}}</span>
      </div>
      <label class="col-md-2" style="padding-left: 0px;padding-top: 10px;">{{simbolo}}</label>
    </div>
    <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.cuenta_id}" *ngIf="afecta_banco == 'true'">
      <label for="cuenta_id" class="col-md-2 control-label" for="tipo">Cuenta</label>
      <div class="col-md-10">
        <select id="cuenta_id" class="form-control"></select>
        <span  *ngIf="formErrors.cuenta_id" id="errornombre" class="help-block">{{ formErrors.cuenta_id}}</span>
      </div>
    </div>
    <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.referencia}" *ngIf="afecta_banco  == 'true'" >
      <label for="referencia" class="col-md-2 control-label" for="referencia"> Referencia </label>
      <div class="col-md-10" align="right">
        <input  id="referencia" type="text" class="form-control" formControlName="referencia">
        <span  *ngIf="formErrors.referencia" id="errornombre" class="help-block">{{ formErrors.referencia}}</span>
      </div>
    </div>
    <div [ngClass]="{'form-group': true,'col-md-12': true,'has-error': formErrors.descripcion}" >
      <div class="col-md-5 pull-right" >
        <h4 class="page-header"><strong>Totales :</strong></h4>
        <table class="table table-hover">
          <tr>
            <td style="text-align: right;"><strong> Saldo : </strong></td>
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
</div>`,
  providers: [AbonoService]
})
export class CierreEditAbonoComponent implements OnInit {

    private abonoForm: FormGroup;
    private divisa : boolean = false;
    private abono: Abono;
    private jtipo: any; /// tipo de moneda cambio 
    private jcuenta: any;
    private jfecha: any;
    private afecta_banco: string = 'false';
    private simbolo: string;
    private tasa: number= 0.0;
    private cantidad: number= 0.0;
    private saldo: number= 0.0;
    private cierreEditComponent : CierreEditComponent;

  private formErrors: any = {
    'referencia': '',
    'cantidad': '',
    'tasa': '',
    'tipo_id': '',
    'afecta_banco': '',
    'cuenta_id': '',
    'fecha': '',
  };

  constructor(private abonoService: AbonoService,
    private fB: FormBuilder,
    private _changeDetectionRef: ChangeDetectorRef ) {

  }

  onValueChanged(data?: any) {
    if (this.abonoForm) { 
      this.formErrors.tipo_id = '';
      this.formErrors.monto = '';
      this.formErrors.saldo = '';
      this.formErrors.cuenta_id = '';
      this.formErrors.referencia = '';
      this.formErrors.fecha = '';
      this.formErrors.negocio_id = '';
      this.formErrors.cantidad = '';
      this.formErrors.estado = '';
      this._changeDetectionRef.detectChanges();
    }
  }

  onGuardar(): void
  {
    let abono = this.abonoForm.value;
    abono.tipo_id = this.jtipo.val();
    abono.cuenta_id = (this.jcuenta? this.jcuenta.val(): undefined);  
    abono.fecha = this.jfecha.val();
    abono.afecta_banco = (this.afecta_banco === "true" ? true: false )

    this.abonoService.guardar(abono).then(abono => {
      this.cierreEditComponent.agregarEditarAbono(abono);
    }).catch((errores)=>{
       this.formErrors['tipo_id'] =  errores.tipo_id;
       this.formErrors['monto'] =  errores.monto;
       this.formErrors['saldo'] =  errores.saldo;
       this.formErrors['cuenta_id'] =  errores.cuenta_id;
       this.formErrors['referencia'] =  errores.referencia;  
       this.formErrors['fecha'] =  errores.fecha;
       this.formErrors['negocio_id'] =  errores.negocio_id;
       this.formErrors['cantidad'] =  errores.cantidad;
       this.formErrors['estado'] =  errores.estado;
       this.formErrors['tasa'] =  errores.tasa;
       this._changeDetectionRef.detectChanges();
    });
  }

  ngOnInit(): void {
		this.formBuilder();
    this.setModel(new Abono(),null)
  }

  formBuilder(): void {
    this.abonoForm = this.fB.group({
      'id':'',
      'referencia': '',
      'cantidad': '',
      'tasa': '',
      'tipo_id': '',
      'afecta_banco': '',
      'cuenta_id': '',
      'fecha': '',
      'negocio_id': ''
    });
   this.abonoForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  setModel(abono: Abono, cierreEditComponent: CierreEditComponent): void {
    this.abono = abono;
    this.cierreEditComponent = cierreEditComponent;
    this.abonoForm.setValue({
      'id': abono.id || '' ,
      'referencia': abono.referencia || '',
      'cantidad': abono.cantidad || '',
      'tasa': abono.tasa || '',
      'tipo_id': abono.tipo_id || '',
      'afecta_banco': abono.afecta_banco || '',
      'cuenta_id': abono.cuenta_id || '',
      'fecha': abono.fecha || '',
      'negocio_id': abono.negocio_id || ''
    });
    this.jtipo = JqueryComponent.tipos("form #tipo_id",this.abono.tipo);
    this.jtipo.on('select2:select', (e: any) => {
      this.simbolo = e.params.data.simbolo;
      this.tasa = e.params.data.tasa;
      this.divisa = e.params.data.divisa;
      this.calcularMonto();
      if(!this.divisa){
        this.afecta_banco = 'false';
      }
    });
    this.jfecha = JqueryComponent.fecha("form #fecha",this.abono.fecha);
    this.jcuenta =  JqueryComponent.cuentas("form #cuenta_id",this.abono.cuenta);

    if(abono.id != undefined){
      this.afecta_banco = (abono.afecta_banco? "true":"false");
      this.simbolo = abono.tipo.simbolo;
      this.tasa  = abono.tasa;
      this.cantidad  = abono.cantidad;
      this.saldo = abono.saldo;
    }
  }

  calcularMonto() : void {
    this.saldo = this.tasa * this.cantidad;
  }
 
  cambiarAfectaBanco(): void {
    if(this.afecta_banco === 'true') {
      this.jcuenta = JqueryComponent.cuentas("form #cuenta_id");
    }
  } 

  onCancelar() :void {
    this.cierreEditComponent.onActivarCierre()
  }
} 