import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';
import { Component, Input,Output, OnInit, ViewChild , EventEmitter, Injectable } from '@angular/core';
import { Cuenta } from './../../models/cuenta';
import { Banco } from './../../models/banco';
import { CuentaService } from './../../services/cuenta.service';
import { BancoService } from './../../services/banco.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { CuentasComponent } from './cuentas.component';
import { Router } from '@angular/router';

import { JqueryComponent } from './../jquery.component';
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
  private cuenta: Cuenta;
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
 

  ngOnInit(): void {
		this.formBuilder();
    this.modal.onShown.subscribe((event : any) => {
      this.bancoSelect = JqueryComponent.bancos("form #banco_id",this.cuenta.banco);
    });
  }

  formBuilder(): void 
  {
    this.cuentaForm = this.fB.group({
      'id': '',
      'numero': '',
      'banco_id': '',
    });
   this.cuentaForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  hideModal(): void {
    this.modal.hide();
  }

  setModel(cuenta: Cuenta): void {
    this.cuenta = cuenta;
    this.cuentaForm.setValue({
      'id': cuenta.id,
      'numero': cuenta.numero,
      'banco_id': cuenta.banco_id
    });
  }

  openModal(component: CuentasComponent) :void {
    this.component = component;
    this.modal.show();
  }
}
   
 