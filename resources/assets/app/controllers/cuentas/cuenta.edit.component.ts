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


@Component({
  selector: 'cuenta-edit-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog" style="width:85%; height:80%;" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" (click)="hideModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Editar Cuenta</h4>
      </div>
      <div class="modal-body">
        <div class="panel-body" *ngIf="cuenta">
        
        <form [formGroup]="cuentaForm" (ngSubmit)="guardar()" class="form-horizontal">
          
          <div [ngClass]="{'form-group': true, 'has-error': formErrors.numero}"  >
            <label for="numero" class="col-sm-2 control-label" for="numero">Numero</label>
            <div class="col-sm-10">
              <input  id="numero" type="text" class="form-control" formControlName="numero" aria-describedby="errornumero" placeholder="Numero de cuenta" required >
              <span  *ngIf="formErrors.numero" id="errornumero" class="help-block">{{ formErrors.numero}}</span>
            </div>
          </div> 
          
         <div [ngClass]="{'form-group': true, 'has-error': formErrors.banco_id}"  >
            <label for="banco_id" class="col-sm-2 control-label" for="estado">Banco</label>
            <div class="col-sm-10">
              <select id="banco_id" class="form-control" > 
              
              </select>
              <span  *ngIf="formErrors.banco_id" class="help-block">{{ formErrors.banco_id}}</span>
            </div>
          </div>
 
          <div class="form-group">
            <div class="col-sm-12" align="right">
              <input type="button" class="btn btn-default" (click)="guardar()" value="Guardar">
            </div>
          </div>
        </form>
         
        </div>
      </div>
    </div>
  </div>
</div>
  `,
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
      'id': cuenta.id  || '',
      'numero': cuenta.numero  || '',
      'banco_id': cuenta.banco_id  || ''
    });
  }

  openModal(component: CuentasComponent) :void {
    this.component = component;
    this.modal.show();
  }
}