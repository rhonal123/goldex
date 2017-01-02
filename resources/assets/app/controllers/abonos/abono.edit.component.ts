import { Component, Input, OnInit, ViewChild, ChangeDetectorRef } from '@angular/core';
import { Router } from '@angular/router';
import { Abono } from './../../models/abono';
import { AbonoService } from './../../services/abono.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { AbonosComponent } from './abonos.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';
import { JqueryComponent } from './../jquery.component';

@Component({
  selector: 'abono-edit-component',
  templateUrl: 'app/templates/abonos/abono.edit.component.html',
  providers: [AbonoService]
})
export class AbonoEditComponent implements OnInit {

  @ViewChild('modal')  modal: ModalDirective;
  
  abonoForm: FormGroup;
  component : AbonosComponent;
  divisa : boolean = false;

  abono: Abono;
  
  jtipo: any; /// tipo de moneda cambio 
  jcuenta: any;
  jnegocio: any;
  jfecha: any;
  afecta_banco: string = 'false';
  simbolo: string;
  tasa: number= 0.0;
  cantidad: number= 0.0;
  monto: number= 0.0;
  saldo: number= 0.0;

  private formErrors: any = {
    'referencia': '',
    'cantidad': '',
    'tasa': '',
    'tipo_id': '',
    'afecta_banco': '',
    'cuenta_id': '',
    'fecha': '',
    'negocio_id': ''
  };

  constructor(private abonoService: AbonoService, private fB: FormBuilder,private _changeDetectionRef: ChangeDetectorRef) {

  }

  onValueChanged(data?: any) {
    if (!this.abonoForm) { return; }
     this.formErrors.tipo_id = '';
     this.formErrors.monto = '';
     this.formErrors.saldo = '';
     this.formErrors.cuenta_id = '';
     this.formErrors.referencia = '';
     this.formErrors.fecha = '';
     this.formErrors.negocio_id = '';
     this.formErrors.cantidad = '';
     this.formErrors.estado = '';
  }

  guardar(): void
  {
    let abono = this.abonoForm.value;

    abono.tipo_id = this.jtipo.val();
    abono.cuenta_id = (this.jcuenta? this.jcuenta.val(): undefined);  
    abono.negocio_id = this.jnegocio.val();
    abono.fecha = this.jfecha.val();
    abono.afecta_banco = (this.afecta_banco === "true" ? true: false )
    this.abonoService.guardar(abono).then(abono => {
      this.component.changeTable(abono);
      this.hideModal();
      this.jtipo.empty();
      this.jnegocio.empty();
      if(this.jcuenta){
        this.jcuenta.empty();
      }
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
    this.modal.onShown.subscribe((event : any) => {
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
      this.jnegocio = JqueryComponent.negocios("form #negocio_id",this.abono.negocio);
    });
  }

  formBuilder(): void 
  {

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

  hideModal(): void {
    this.modal.hide();
  }

  setModel(abono: Abono): void {
    this.abono = abono;
    if(abono.id != undefined){
      this.afecta_banco = (abono.afecta_banco? "true":"false");
      this.simbolo = abono.tipo.simbolo;
      this.tasa  = abono.tasa;
      this.cantidad  = abono.cantidad;
      this.monto =  abono.monto;
      this.saldo = abono.saldo;
    }
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
  }

  openModal(component: AbonosComponent) :void {
    this.component = component;
    this.modal.show();
  }

  calcularMonto() : void{
    this.monto = this.tasa * this.cantidad;
    this.saldo = this.tasa * this.cantidad;
  }
 
  cambiarAfectaBanco(): void {
    if(this.afecta_banco === 'true') {
      this.jcuenta = JqueryComponent.cuentas("form #cuenta_id");
    }
  } 

}
   
 