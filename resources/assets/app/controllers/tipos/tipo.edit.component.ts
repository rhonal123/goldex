import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Tipo } from './../../models/tipo';
import { TipoService } from './../../services/tipo.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { TiposComponent } from './tipos.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';


@Component({
  selector: 'tipo-edit-component',
  templateUrl: 'app/templates/tipos/tipo.edit.component.html',
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
   
 