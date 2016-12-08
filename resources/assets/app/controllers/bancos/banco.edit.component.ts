import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Banco } from './../../models/banco';
import { BancoService } from './../../services/banco.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { BancosComponent } from './bancos.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';


@Component({
  selector: 'banco-edit-component',
  templateUrl: 'app/templates/bancos/banco.edit.component.html',
  providers: [BancoService]
})
export class BancoEditComponent implements OnInit {

  @ViewChild('modal')  modal: ModalDirective;
  
  private bancoForm: FormGroup;
  private component : BancosComponent;

  //@ViewChild('bancoForm') currentForm: NgForm;
  
  @Input() banco: Banco;

  private formErrors: any = {
    'nombre':''
  };

  constructor(private bancoService: BancoService, private fB: FormBuilder ) {

  }

  onValueChanged(data?: any) {
    if (!this.bancoForm) { return; }
     this.formErrors.nombre  = "";
    /*for (const field in this.formErrors) {
      this.formErrors[field] = '';
    }*/
  }

  guardar(): void
  {
    this.banco = this.bancoForm.value;
    this.bancoService.guardar(this.banco).then(banco => {
      this.component.changeTable(banco);
      this.hideModal();
    }).catch((errores)=>{
      console.log(errores.nombre);
       this.formErrors['nombre'] =  errores.nombre
    });
  }


  ngOnInit(): void {
		this.formBuilder();
  }

  formBuilder(): void 
  {
    this.bancoForm = this.fB.group({
      'id': '',
      'nombre': '',
      'created_at': '',
      'updated_at': ''
    });
   this.bancoForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  hideModal(): void {
    this.modal.hide();
  }

  setModel(banco: Banco): void {
    this.banco = banco;
    this.bancoForm.setValue(Banco.clone(banco));
  }

  openModal(component: BancosComponent) :void {
    this.component = component;
    this.modal.show();
  }
}
   
 