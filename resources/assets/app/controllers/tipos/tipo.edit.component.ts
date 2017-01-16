import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Tipo } from './../../models/tipo';
import { TipoService } from './../../services/tipo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { TiposComponent } from './tipos.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';


@Component({
  selector: 'tipo-edit-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
<div class="modal-dialog" style="width:85%; height:80%;" >
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" (click)="hideModal()" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title">Editar Tipo</h4>
  </div>
  <div class="modal-body">
    <div class="panel-body" *ngIf="tipo">
      <form [formGroup]="tipoForm" (ngSubmit)="guardar()" class="form-horizontal">
        <div [ngClass]="{'form-group': true, 'has-error': formErrors.tipo}"  >
          <label for="tipo" class="col-sm-2 control-label" for="tipo">Tipo </label>
          <div class="col-sm-10">
            <input  id="tipo" type="text" class="form-control" formControlName="tipo" aria-describedby="errornombre">
            <span  *ngIf="formErrors.tipo" id="errortipo" class="help-block">{{ formErrors.tipo}}</span>
          </div>
        </div>
        <div [ngClass]="{'form-group': true, 'has-error': formErrors.simbolo}"  >
          <label for="simbolo" class="col-sm-2 control-label" for="simbolo">Simbolo </label>
          <div class="col-sm-10">
            <input  id="simbolo" type="text" class="form-control" formControlName="simbolo" aria-describedby="errorsimboloe">
            <span  *ngIf="formErrors.simbolo" id="errorsimbolo" class="help-block">{{ formErrors.simbolo}}</span>
          </div>
        </div>
        <div [ngClass]="{'form-group': true, 'has-error': formErrors.tasa}"  >
          <label for="tasa" class="col-sm-2 control-label" for="tasa">Tasa </label>
          <div class="col-sm-10">
            <input  id="tasa" type="number" class="form-control" formControlName="tasa" aria-describedby="errortasa">
            <span  *ngIf="formErrors.tasa" id="errortasa" class="help-block">{{ formErrors.tasa}}</span>
          </div>
        </div>
        <div [ngClass]="{'form-group': true, 'has-error': formErrors.divisa}"  >
          <label for="divisa" class="col-sm-2 control-label" for="divisa"> Divisa </label>
          <div class="col-sm-10">
            <input  id="divisa" type="checkbox" formControlName="divisa" aria-describedby="errorsimboloe" style="padding-left: 0px;padding-top: 10px;">
            <span  *ngIf="formErrors.divisa" id="errorsimbolo" class="help-block">{{ formErrors.divisa}}</span>
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
  providers: [TipoService]
})
export class TipoEditComponent implements OnInit {

  @ViewChild('modal')
  modal: ModalDirective;
  
  private tipoForm: FormGroup;
  private component : TiposComponent;
  tipo: Tipo;
  
  private formErrors: any = {
    'tipo':'',
    'simbolo':'',
    'tasa': '',
    'divisa': '', 
  };

  constructor(private tipoService: TipoService, private fB: FormBuilder ) {

  }

  onValueChanged(data?: any) {
    if (!this.tipoForm) { return; }
     this.formErrors.tipo  = "";
     this.formErrors.simbolo  = "";
     this.formErrors.tasa  = "";
     this.formErrors.divisa  = "";

  }

  guardar(): void
  {
    let  tipo = this.tipoForm.value;
    console.log(tipo);
    this.tipoService.guardar(tipo).then(tipo => {
      this.component.changeTable(tipo);
      this.hideModal();
    }).catch((errores)=>{
       this.formErrors['tipo'] =  errores.tipo
       this.formErrors['simbolo'] =  errores.simbolo
       this.formErrors['tasa'] =  errores.tasa
       this.formErrors['divisa'] =  errores.divisa
    });
  }


  ngOnInit(): void {
		this.formBuilder();
  }

  formBuilder(): void 
  {
    this.tipoForm = this.fB.group({
      'id': '',
      'tipo':'',
      'simbolo':'',
      'tasa': '',
      'divisa': '', 
    });
   this.tipoForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  hideModal(): void {
    this.modal.hide();
  }

  setModel(tipo: Tipo): void {
    this.tipo = tipo;
    this.tipoForm.setValue({
      'id': tipo.id || '',
      'tipo':tipo.tipo || '',
      'simbolo':tipo.simbolo || '',
      'tasa': tipo.tasa || '',
      'divisa': tipo.divisa || false, 
    });
  }

  openModal(component: TiposComponent) :void {
    this.component = component;
    this.modal.show();
  }
}
   
 