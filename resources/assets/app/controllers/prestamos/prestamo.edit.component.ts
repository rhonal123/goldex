import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Prestamo } from './../../models/prestamo';
import { PrestamoService } from './../../services/prestamo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { PrestamosComponent } from './prestamos.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';

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

  @Input() prestamo: Prestamo;

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
  
      this.jfecha = ($("#fecha") as any).datepicker({format: "yyyy/mm/dd"});
      if(this.prestamo.fecha) {
       /// this.jfecha.val();
      }

      this.jfecha = ($("#fecha") as any).datepicker({format: "yyyy/mm/dd"});
      if(this.prestamo.fecha) {
        this.jfecha.val(Prestamo.strFecha(this.prestamo));
      }
  
     if(this.prestamo.id && this.prestamo.cuenta)
      {
        let op =  document.createElement("option");
        op.setAttribute("value",this.prestamo.cuenta.id.toString());
        op.appendChild(document.createTextNode(this.prestamo.cuenta.numero));
        $("#cuenta_id").empty();
        $("#cuenta_id").append(op);
      }
      this.jcuenta = this.select2Cuentas();

      /*
      this.jcuenta = ($("#cuenta_id") as any ).select2({
        ajax: {
          url: "/sistema/cuentas",
          dataType: 'json',
          delay: 250,
          data: (params: any) => {
            return {
              search: params.term, // search term
              page: params.page
            };
          },
          processResults: (data : any, params : any ) => {
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
        templateSelection: (data: any) =>  data.numero || data.text,
        templateResult: (data: any) => data.numero || data.text,
      });
      */
     /********************** Negocio *******************************************************/
     if(this.prestamo.id && this.prestamo.negocio )
      {
        let op =  document.createElement("option");
        op.setAttribute("value",this.prestamo.negocio.id.toString());
        op.setAttribute("selected","selected"); 
        op.appendChild(document.createTextNode(this.prestamo.negocio.nombre));
        $("#negocio_id").empty();
        $("#negocio_id").append(op);
      } 

      this.jnegocio = ($("#negocio_id") as any).select2({
        ajax: {
          url: "/sistema/negocios",
          dataType: 'json',
          delay: 250,
          data:  (params: any) => {
            return {
              search: params.term, // search term
              page: params.page
            };
          },
          processResults:  (data: any, params: any)=>  {
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
        escapeMarkup: (markup: any) => {    return markup; }, // let our custom formatter work
        minimumInputLength: 0,
        templateSelection: (data: any) => data.nombre || data.text,
        templateResult: (data: any) => data.nombre || data.text,
      });
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

  select2Cuentas() :any {
    return  ($("#cuenta_id") as any ).select2({
      ajax: {
        url: "/sistema/cuentas",
        dataType: 'json',
        delay: 250,
        data: (params: any) => {
          return {
            search: params.term, // search term
            page: params.page
          };
        },
        processResults: (data : any, params : any ) => {
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
      templateSelection: (data: any) => {
        console.log(data);
          if(data.banco  != undefined){
            return  data.banco.nombre+" -- "+data.numero;
          }
          return "";
      },
      templateResult: (data: any) => {
        console.log(data);
        if(data.banco  != undefined){
          return  data.banco.nombre+" -- "+data.numero;
        }
          return "";
      },
    }); 
  }

  cambiarTipo(): void{
    if(this.tipo != "efectivo"){
      this.jcuenta =  this.select2Cuentas();
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
   
 