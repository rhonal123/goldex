import { Component, Input,Output, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Cuenta } from './../../models/cuenta';
import { Banco } from './../../models/banco';
import { Bancos } from './../../models/bancos';

import { CuentaService } from './../../services/cuenta.service';
import { BancoService } from './../../services/banco.service';

import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

import { EventEmitter, Injectable } from '@angular/core';

import { CuentasComponent } from './cuentas.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';

///<reference path="./jquery.d.ts" />

declare var $: any;


@Component({
  selector: 'cuenta-edit-component',
  templateUrl: 'app/templates/cuentas/cuenta.edit.component.html',
  providers: [CuentaService]
})
export class CuentaEditComponent implements OnInit {

  @ViewChild('modal')  modal: ModalDirective;
  
  private cuentaForm: FormGroup;
  private component : CuentasComponent; 
  private bancoSelect :any;


  @Output() public onShown:  EventEmitter<CuentaEditComponent> = new EventEmitter();


  @Input() cuenta: Cuenta;
 

  private formErrors: any = {
    'nombre':''
  };

  constructor(private cuentaService: CuentaService,private bancoService: BancoService, private fB: FormBuilder ) {
  }

  onValueChanged(data?: any) {
    if (!this.cuentaForm) { return; }
    for (const field in this.formErrors) {
      this.formErrors[field] = '';
    }
  }

  guardar(): void
  {
    this.cuenta = this.cuentaForm.value;
    this.cuenta.banco_id = this.bancoSelect.val();
    this.cuentaService.guardar(this.cuenta).then(cuenta => {
      this.component.changeTable(cuenta);
      this.hideModal();
    }).catch((errores)=>{
      console.log(errores.numero);
       this.formErrors['numero'] =  errores.numero
       this.formErrors['banco_id'] =  errores.banco_id
    });



  }

  ngAfterViewInit() {
    /// $("#banco_id").trigger('change');
  }


/*
var para = document.createElement("p");
var node = document.createTextNode("This is new.");
para.appendChild(node);

var element = document.getElementById("div1");
element.appendChild(para);
*/

  ngOnInit(): void {
		this.formBuilder();
    let formato = function presentacion(banco :any){
      return banco.nombre || banco.text;
    }; 
 
    this.modal.onShown.subscribe((event : any) => {
     if(this.cuenta.id)
      {
        let op =  document.createElement("option");
        op.setAttribute("value",this.cuenta.banco.id.toString());
        op.appendChild(document.createTextNode(this.cuenta.banco.nombre));
        $("#banco_id").empty();
        $("#banco_id").append(op);
      }

      this.bancoSelect = ($("#banco_id") as any ).select2({
        ajax: {
          url: "http://localhostsistema/bancos",
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
        placeholder: 'Seleccione un Banco ',
        escapeMarkup: function (markup: any) {  console.log(markup);  return markup; }, // let our custom formatter work
        minimumInputLength: 0,
        templateSelection: formato,
        templateResult: formato,
      });
    
    });

  

  }

  formBuilder(): void 
  {
    this.cuentaForm = this.fB.group({
      'id': '',
      'numero': '',
      'banco_id': '',
      'banco': null,
      'created_at': '',
      'updated_at': ''
    });
   this.cuentaForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  hideModal(): void {
    this.modal.hide();
  }

  setModel(cuenta: Cuenta): void {
    this.cuenta = cuenta;
    this.cuentaForm.setValue(Cuenta.clone(cuenta));



  }

  openModal(component: CuentasComponent) :void {
    this.component = component;
    this.modal.show();
  }
}
   
 