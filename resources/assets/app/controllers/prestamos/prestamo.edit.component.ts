import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Prestamo } from './../../models/prestamo';
import { PrestamoService } from './../../services/prestamo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { PrestamosComponent } from './prestamos.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';
import { JqueryComponent } from './../jquery.component';

declare var $: any;


@Component({
  selector: 'prestamo-edit-component',
  templateUrl: 'app/templates/prestamos/prestamo.edit.component.html',
  providers: [PrestamoService]
})
export class PrestamoEditComponent implements OnInit {

  @ViewChild('modal')  modal: ModalDirective;
  
  prestamoForm: FormGroup;
  component : PrestamosComponent;
  tipo: string;
  tipoBanco: string;
  jcuenta: any;
  jnegocio: any;
  jfecha: any;

  puro: number = 0;
  monto: number = 0;
  cantidad: number = 0;

  prestamo: Prestamo;

  private formErrors: any = {
    'tipo': '',
    'negocio_id': '',
    'fecha': '',
    'precio_material': '',
    'monto': '',
    'descripcion': '',
    'cuenta_id': '',
    'comision': '',
    'referencia': ''
  };

  constructor(private prestamoService: PrestamoService, private fB: FormBuilder ) {

  }

  onValueChanged(data?: any) {
    if (!this.prestamoForm) { return; }
    for (const field in this.formErrors) {
      this.formErrors[field] = '';
    }
  }

  guardar(): void
  {
    let values = this.prestamoForm.value;
    values.cuenta_id = this.jcuenta.val();
    values.negocio_id =  this.jnegocio.val();
    values.fecha =  this.jfecha.val();
    this.prestamoService.guardar(values).then(prestamo => {
      this.component.changeTable(prestamo);
      this.hideModal();
    }).catch((errores)=>{
        this.formErrors['tipo'] =  errores.tipo;
        this.formErrors['negocio_id'] =  errores.negocio_id;
        this.formErrors['fecha'] =  errores.fecha;
        this.formErrors['precio_material'] =  errores.precio_material;
        this.formErrors['monto'] =  errores.monto;
        this.formErrors['descripcion'] =  errores.descripcion;
        this.formErrors['cuenta_id'] =  errores.cuenta_id;
        this.formErrors['comision'] =  errores.comision;
        this.formErrors['referencia'] =  errores.referencia;
    });
  }

  ngOnInit(): void {
    this.formBuilder();
    this.modal.onShown.subscribe((event : any) => {
      this.jfecha = JqueryComponent.fecha("form #fecha",this.prestamo.fecha);
      this.jcuenta =  JqueryComponent.cuentas("form #cuenta_id",this.prestamo.cuenta);
      this.jnegocio = JqueryComponent.negocios("form #negocio_id",this.prestamo.negocio);
    });
  }

  formBuilder(): void 
  {
    this.prestamoForm = this.fB.group({
      'id':'',
      'tipo': '',
      'negocio_id': '',
      'fecha': '',
      'precio_material': '',
      'monto': '',
      'descripcion': '',
      'cuenta_id': '',
      'comision': '',
      'referencia': ''
    });
   this.prestamoForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  hideModal(): void {
    this.modal.hide();
  }

  setModel(prestamo: Prestamo): void {
    this.prestamo = prestamo;
    this.puro = prestamo.precio_material;
    this.monto = prestamo.monto;
    this.calcularPuro();
    this.tipo = this.prestamo.tipo;
    this.prestamoForm.setValue({
      'id':prestamo.id,
      'tipo': prestamo.tipo,
      'negocio_id': prestamo.negocio_id,
      'fecha': prestamo.fecha,
      'precio_material': prestamo.precio_material,
      'monto': prestamo.monto,
      'descripcion': prestamo.descripcion,
      'cuenta_id': prestamo.cuenta_id,
      'comision': prestamo.comision,
      'referencia': prestamo.referencia
    });
  }

  openModal(component: PrestamosComponent) :void {
    this.component = component;
    this.modal.show();
  }
 
  cambiarTipo(): void{
    if(this.tipo != "efectivo"){
      this.jcuenta =  JqueryComponent.cuentas("form #cuenta_id");
    }
  }


  calcularPuro():void {
    if(this.puro == 0) {
      this.cantidad = 0;
    }
    else {
      this.cantidad = this.monto / this.puro; 
    }
  }
}
   
 