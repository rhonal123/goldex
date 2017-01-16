import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { Banco } from './../../models/banco';
import { BancoService } from './../../services/banco.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { BancosComponent } from './bancos.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';


@Component({
  selector: 'banco-edit-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
<div class="modal-dialog" style="width:85%; height:80%;" >
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" (click)="hideModal()" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title">Editar Banco</h4>
  </div>
  <div class="modal-body">
    <div class="panel-body" *ngIf="banco">
    <form [formGroup]="bancoForm" (ngSubmit)="guardar()" class="form-horizontal">
      <div [ngClass]="{'form-group': true, 'has-error': formErrors.nombre}"  >
        <label for="nombre" class="col-sm-2 control-label" for="nombre">Nombre</label>
        <div class="col-sm-10">
           <input type="text" class="form-control" formControlName="nombre" aria-describedby="errornombre" placeholder="Nombre del banco">
          <span *ngIf="formErrors.nombre" id="errornombre" class="help-block">{{formErrors.nombre}}</span>
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
      'nombre': ''
    });
   this.bancoForm.valueChanges.subscribe(data => this.onValueChanged(data));
  }

  hideModal(): void {
    this.modal.hide();
  }

  setModel(banco: Banco): void {
    this.banco = banco;
    this.bancoForm.setValue({
      'id': banco.id || '',
      'nombre':banco.nombre  || ''
    });
  }

  openModal(component: BancosComponent) :void {
    this.component = component;
    this.modal.show();
  }
}
   
 