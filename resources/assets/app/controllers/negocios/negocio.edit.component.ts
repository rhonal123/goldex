import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Negocio } from './../../models/negocio';
import { NegocioService } from './../../services/negocio.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { NegociosComponent } from './negocios.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';


@Component({
  selector: 'negocio-edit-component',
  template:  `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog" style="width:85%; height:80%;" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" (click)="hideModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Editar Negocio</h4>
      </div>
      <div class="modal-body">
        <div class="panel-body" *ngIf="negocio">
        <form [formGroup]="negocioForm" (ngSubmit)="guardar()" class="form-horizontal">

         <div [ngClass]="{'form-group': true,'col-md-6': true, 'has-error': formErrors.rif}"  >
            <label for="rif" class="col-sm-2 control-label" for="rif">Rif</label>
            <div class="col-sm-10">
              <input  id="rif" type="text" class="form-control" formControlName="rif" placeholder="Rif del negocio" >
              <span  *ngIf="formErrors.rif" class="help-block">{{ formErrors.rif}}</span>
            </div>
          </div>

          <div [ngClass]="{'form-group': true,'col-md-6': true,'has-error': formErrors.nombre}"  >
            <label for="nombre" class="col-sm-2 control-label" for="nombre">Nombre</label>
            <div class="col-sm-10">
              <input  id="nombre" type="text" class="form-control" formControlName="nombre" placeholder="Nombre del negocio" >
              <span  *ngIf="formErrors.nombre" class="help-block">{{ formErrors.nombre}}</span>
            </div>
          </div>

          <div [ngClass]="{'form-group': true,'col-md-6': true,  'has-error': formErrors.encargado}"  >
            <label for="encargado" class="col-sm-2 control-label" for="encargado">Encargado</label>
            <div class="col-sm-10">
              <input  id="encargado" type="text" class="form-control" formControlName="encargado" placeholder="Encargado del negocio" >
              <span  *ngIf="formErrors.encargado" class="help-block">{{ formErrors.encargado}}</span>
            </div>
          </div>

         <div [ngClass]="{'form-group': true, 'col-md-6': true, 'has-error': formErrors.telefono}"  >
            <label for="telefono" class="col-sm-2 control-label" for="telefono">Telefono</label>
            <div class="col-sm-10">
              <input  id="telefono" type="text" class="form-control" formControlName="telefono" placeholder="Nombre del negocio" >
              <span  *ngIf="formErrors.telefono" class="help-block">{{ formErrors.telefono}}</span>
            </div>
          </div>


         <div [ngClass]="{'form-group': true,'col-md-12': true, 'has-error': formErrors.descripcion}"  >
            <label for="descripcion" class="col-sm-1 control-label" for="descripcion">Descripción</label>
            <div class="col-sm-10">
              <textarea id="descripcion" class="form-control" formControlName="descripcion" placeholder="Descripcion del negocio"  rows="3"></textarea>  
              <span  *ngIf="formErrors.descripcion" class="help-block">{{ formErrors.descripcion}}</span>
            </div>
          </div>
           
         <div [ngClass]="{'form-group': true,'col-md-12': true, 'has-error': formErrors.direccion}"  >
            <label for="direccion" class="col-sm-1 control-label" for="direccion">Dirección</label>
            <div class="col-sm-10">
              <textarea  id="direccion" class="form-control" formControlName="direccion" placeholder="Dirección del negocio" rows="3" ></textarea>
              <span  *ngIf="formErrors.direccion" class="help-block">{{ formErrors.direccion}}</span>
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
  providers: [NegocioService]
})
export class NegocioEditComponent implements OnInit {

  @ViewChild('modal')  modal: ModalDirective;
  
  private negocioForm: FormGroup;
  private component : NegociosComponent;

  //@ViewChild('negocioForm') currentForm: NgForm;
  
  @Input() negocio: Negocio;

  private formErrors: any = {
    'nombre':'',
    'rif':'',
    'descripcion':'',
    'direccion':'',
    'encargado':'',
    'telefono':''
  };

  constructor(private negocioService: NegocioService, private fB: FormBuilder ) {

  }

  onValueChanged(data?: any) {
    if (!this.negocioForm) { return; }
    for (const field in this.formErrors) {
      this.formErrors[field] = '';
    }
  }

  guardar(): void
  {
    this.negocio = this.negocioForm.value;
    this.negocioService.guardar(this.negocio).then(negocio => {
      this.component.changeTable(negocio);
      this.hideModal();
    }).catch((errores)=>{
      console.log(errores.nombre);
       this.formErrors['nombre'] =  errores.nombre;
       this.formErrors['rif'] =  errores.rif;
       this.formErrors['descripcion'] =  errores.descripcion;
       this.formErrors['direccion'] =  errores.direccion;
       this.formErrors['encargado'] =  errores.encargado;
       this.formErrors['telefono'] =  errores.telefono;
    });
  }


  ngOnInit(): void {
		this.formBuilder();
  }

  formBuilder(): void 
  {
    this.negocioForm = this.fB.group({
      'id': '',
      'nombre': '',
      'rif':'',
      'descripcion':'',
      'direccion':'',
      'encargado':'',
      'telefono':'',
    });
   this.negocioForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  hideModal(): void {
    this.modal.hide();
  }

  setModel(negocio: Negocio): void {
    this.negocio = negocio;
    this.negocioForm.setValue({
      'id': negocio.id || '',
      'nombre': negocio.id || '',
      'rif': negocio.rif || '',
      'descripcion': negocio.descripcion || '',
      'direccion': negocio.direccion || '',
      'encargado': negocio.encargado || '',
      'telefono': negocio.telefono || '',
    });
  }

  openModal(component: NegociosComponent) :void {
    this.component = component;
    this.modal.show();
  }
}
   
 