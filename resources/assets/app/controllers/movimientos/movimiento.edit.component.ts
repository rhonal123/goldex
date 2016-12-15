import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Movimiento } from './../../models/movimiento';
import { MovimientoService } from './../../services/movimiento.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { MovimientosComponent } from './movimientos.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';

declare var $: any;


@Component({
  selector: 'movimiento-edit-component',
  templateUrl: 'app/templates/movimientos/movimiento.edit.component.html',
  providers: [MovimientoService]
})
export class MovimientoEditComponent implements OnInit {

  @ViewChild('modal')  modal: ModalDirective;
  
  private movimientoForm: FormGroup;
  private component : MovimientosComponent;
  private tipos: string[] = ["efectivo","transferencia"];
  private clasificaciones: string[] = ["clasificacion1","clasificacion2","clasificacion3","clasificacion4"];

  private jcuenta: any;
  private jbancoDestino: any;
  private jnegocio: any;
  private jfecha: any;


  //@ViewChild('movimientoForm') currentForm: NgForm;
  
  @Input() movimiento: Movimiento;

  private formErrors: any = {
    'negocio_id':'',
    'monto':'',
    'fecha':'',
    'descripcion':'',
    'tipo':'',
    'clasificacion':'',
    'cuenta_id':'',
    'puro':'',
    'cuenta_destino':'',
    'banco_destino_id':''
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
    this.movimiento = this.movimientoForm.value;
    this.movimiento.cuenta_id = this.jcuenta.val();
    this.movimiento.banco_destino_id =this.jbancoDestino.val();
    this.movimiento.negocio_id =  this.jnegocio.val();
    this.movimiento.fecha =  this.jfecha.val();
    console.log("------------------------------------");
    console.log(this.jfecha.val());
    console.log(this.movimiento);
    this.movimientoService.guardar(this.movimiento).then(movimiento => {
      this.component.changeTable(movimiento);
      this.hideModal();
    }).catch((errores)=>{
  
        this.formErrors['negocio_id'] =  errores.negocio_id;
        this.formErrors['monto'] =  errores.monto;
        this.formErrors['fecha'] =  errores.fecha;
        this.formErrors['descripcion'] =  errores.descripcion;
        this.formErrors['tipo'] =  errores.tipo;
        this.formErrors['clasificacion'] =  errores.clasificacion;
        this.formErrors['cuenta_id'] =  errores.cuenta_id;
        this.formErrors['puro'] =  errores.puro;
        this.formErrors['cuenta_destino'] =  errores.cuenta_destino;
        this.formErrors['banco_destino_id'] =  errores.banco_destino_id;
    });
  }


  ngOnInit(): void {
		this.formBuilder();

    let formatoBanco = function presentacion(banco :any){
      return banco.nombre || banco.text;
    }; 
 
    let formatoCuenta = function presentacion(cuenta :any){
      return cuenta.numero || cuenta.text;
    }; 
 
    this.modal.onShown.subscribe((event : any) => {

      this.jfecha = ($("#search_fecha") as any).datepicker({format: "yyyy/mm/dd"});
      if(this.movimiento.fecha) {
        this.jfecha.val(Movimiento.strFecha(this.movimiento));
      }
  
     /********************** Banco *******************************************************/
     if(this.movimiento.id && this.movimiento.banco_destino )
      {
        let op =  document.createElement("option");
        op.setAttribute("value",this.movimiento.banco_destino_id.toString());
        op.appendChild(document.createTextNode(this.movimiento.banco_destino.nombre));
        $("#banco_destino_id").empty();
        $("#banco_destino_id").append(op);
      }

      this.jbancoDestino = ($("#banco_destino_id") as any ).select2({
        ajax: {
          url: "/sistema/bancos",
          dataType: 'json',
          delay: 250,
          data: function (params: any) {
            return {
              search: params.term, // search term
              page: params.page
            };
          },
          processResults: function (data : any, params : any) {
            params.page = params.page || 1;
            return {
              results: data.data,
              pagination: {
                more: (params.page * data.per_page) < data.total
              }
            };
          }
        },
        placeholder: 'Seleccione un Banco ',
        escapeMarkup: function (markup : any) {    return markup; }, // let our custom formatter work
        minimumInputLength: 0,
        templateSelection: formatoBanco,
        templateResult: formatoBanco,
      });
     /********************** Cuenta *******************************************************/
     if(this.movimiento.id && this.movimiento.cuenta )
      {
        let op =  document.createElement("option");
        op.setAttribute("value",this.movimiento.cuenta.id.toString());
        op.appendChild(document.createTextNode(this.movimiento.cuenta.numero));
        $("#cuenta_id").empty();
        $("#cuenta_id").append(op);
      }

      this.jcuenta = ($("#cuenta_id") as any ).select2({
        ajax: {
          url: "/sistema/cuentas",
          dataType: 'json',
          delay: 250,
          data: function (params: any) {
            return {
              search: params.term, // search term
              page: params.page
            };
          },
          processResults: function (data : any, params : any ) {
            params.page = params.page || 1;
            return {
              results: data.data,
              pagination: {
                more: (params.page * data.per_page) < data.total
              }
            };
          }
        },
        placeholder: 'Seleccione una Cuenta ',
        escapeMarkup: function (markup : any) {     return markup; }, // let our custom formatter work
        minimumInputLength: 0,
        templateSelection: formatoCuenta,
        templateResult: formatoCuenta,
      });
     /********************** Negocio *******************************************************/
     if(this.movimiento.id && this.movimiento.negocio )
      {
        let op =  document.createElement("option");
        op.setAttribute("value",this.movimiento.negocio.id.toString());
        op.appendChild(document.createTextNode(this.movimiento.negocio.nombre));
        $("#negocio_id").empty();
        $("#negocio_id").append(op);
      }

      this.jnegocio = ($("#negocio_id") as any).select2({
        ajax: {
          url: "/sistema/negocios",
          dataType: 'json',
          delay: 250,
          data: function (params: any) {
            return {
              search: params.term, // search term
              page: params.page
            };
          },
          processResults: function (data: any, params: any) {
            params.page = params.page || 1;
            return {
              results: data.data,
              pagination: {
                more: (params.page * data.per_page) < data.total
              }
            };
          }
        },
        placeholder: 'Seleccione un Negocio ',
        escapeMarkup: function (markup: any) {    return markup; }, // let our custom formatter work
        minimumInputLength: 0,
        templateSelection: formatoBanco,
        templateResult: formatoBanco,
      });
    });
  }

  formBuilder(): void 
  {
    this.movimientoForm = this.fB.group({
      'id':'',
      'negocio_id':'',
      'monto':'',
      'fecha':'',
      'descripcion':'',
      'tipo':'',
      'clasificacion':'',
      'cuenta_id':'',
      'puro':'',
      'cuenta_destino':'',
      'banco_destino_id':'',
      'created_at':'',
      'updated_at':''
    });
   this.movimientoForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  hideModal(): void {
    this.modal.hide();
  }

  setModel(movimiento: Movimiento): void {
    this.movimiento = movimiento;
    this.movimientoForm.setValue({
      'id': movimiento.id,
      'negocio_id':movimiento.negocio_id,
      'monto':movimiento.monto,
      'fecha':movimiento.fecha,
      'descripcion':movimiento.descripcion,
      'tipo':movimiento.tipo,
      'clasificacion':movimiento.clasificacion,
      'cuenta_id':movimiento.cuenta_id,
      'puro':movimiento.puro,
      'cuenta_destino':movimiento.cuenta_destino,
      'banco_destino_id':movimiento.banco_destino_id,
      'created_at':movimiento.created_at,
      'updated_at':movimiento.updated_at
    });
  }

  openModal(component: MovimientosComponent) :void {
    this.component = component;
    this.modal.show();
  }
}
   
 