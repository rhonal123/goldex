import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Negocio } from './../../models/negocio';
import { NegocioService } from './../../services/negocio.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { NegociosComponent } from './negocios.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';


@Component({
  selector: 'negocio-edit-component',
  templateUrl: 'app/templates/negocios/negocio.edit.component.html',
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
    this.negocioForm.setValue(Negocio.clone(negocio));
  }

  openModal(component: NegociosComponent) :void {
    this.component = component;
    this.modal.show();
  }
}
   
 