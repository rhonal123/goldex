import { Component, Input, OnInit, ViewChild, EventEmitter, ChangeDetectorRef } from '@angular/core';
import { Router } from '@angular/router';
import { Cierre } from './../../models/cierre';
import { Movimiento } from './../../models/movimiento';
import { Negocio } from './../../models/negocio';
import { Abono } from './../../models/abono';
import { CierreService } from './../../services/cierre.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { CierresComponent } from './cierres.component';
import { NgForm, ReactiveFormsModule, FormGroup , FormBuilder } from '@angular/forms';
import { JqueryComponent } from './../jquery.component';
import { CierreEditAbonoComponent } from './cierre.edit.abono.component';
import { CierreEditMovimientoComponent } from './cierre.edit.movimiento.component'
import { CierreEditAsignarPrecioMovimientoComponent } from './cierre.edit.asignar.precio.movimiento.component'
import { AbonoService } from './../../services/abono.service';
import { MovimientoService } from './../../services/movimiento.service';

@Component({
  selector: 'cierre-edit-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  >
<div class="modal-dialog" style="width:95%; height:90%;" >
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" (click)="hideModal()" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    Editar Cierre
  </div>
  <div class="modal-body">
    <div class="panel-body" *ngIf="cierre">
      <tabset>
        <tab heading="Editar Cierre" [active]="cierreActive" [disabled]="cierreDisabled"> 
          <div class="panel-body">
            <div [ngClass]="{'form-group': true, 'col-md-4': true,'has-error': formErrors.negocio_id}">
              <label for="negocio_id" class="col-sm-2 control-label" for="estado">Negocio o Socio </label>
              <div class="col-sm-10">
                <select id="negocio_id" class="form-control"></select>
                <span *ngIf="formErrors.negocio_id" id="errornegocio_id" class="help-block">{{ formErrors.negocio_id}}</span>
              </div> 
            </div>
            <div [ngClass]="{'form-group': true,'col-md-4': true,'has-error': formErrors.fecha}"  >
              <label for="fecha" class="col-md-2 control-label" for="fecha">Fecha</label>
              <div class="col-md-10">
                <input id="fecha" type="text" data-provide="datepicker" class="form-control input-sm" >
                <span *ngIf="formErrors.fecha" id="errornombre" class="help-block">{{ formErrors.fecha}}</span>
              </div>
            </div>

            <div [ngClass]="{'form-group': true,'col-md-4': true,'has-error': formErrors.fecha}"  >
              <label for="total" class="col-md-2 control-label">Total </label>
              <div class="col-md-10">
                <label class="form-control">{{total|number:'1.2-2'|montoBs}}</label>
                <span *ngIf="formErrors.fecha" id="errornombre" class="help-block">{{ formErrors.fecha}}</span>
              </div>
            </div>

            <div class="col-md-12" >
              <h3 class="page-header">
                <button type="button" class="btn btn-default btn-xs" (click)="onAgregarMovimiento()">+</button>
                Movimientos
              </h3>
              <span *ngIf="formErrors.movimientos" id="errornegocio_id" class="help-block">{{ formErrors.movimientos}}</span>
              <div class="table-responsive" style="height:200px; overflow:auto;">
              <table class="table">
                <thead>
                  <tr class="active">
                    <th style="width: 10%">Id</th>
                    <th style="width: 15%">Tipo</th>
                    <th style="width: 15%">Fecha</th>
                    <th style="width: 20%">Total</th>
                    <th style="width: 20%" >precio Puro</th>
                    <th style="width: 20%">Total Gramos</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr *ngFor="let movimiento of movimientos">
                    <td style="width: 10%"><span>{{movimiento.id}}</span></td>
                    <td style="width: 15%"><span>{{movimiento.tipo}}</span></td>
                    <td style="width: 15%"><span>{{movimiento.fecha}}</span></td>
                    <td style="width: 20%"><span>{{movimiento.saldo|number:'1.2-2'}}</span></td>
                    <td style="width: 20%"><span>{{movimiento.precio_puro|number:'1.2-2'}}</span></td>
                    <td style="width: 20%"><span>{{totalGramo(movimiento)|number:'1.2-2'}}</span></td>
                    <td align="right">
                      <span  dropdown > 
                        <span class="glyphicon glyphicon-th" aria-hidden="true" dropdownToggle ></span>
                        <ul class="dropdown-menu dropdown-menu-right " dropdownMenu  role="menu" aria-labelledby="split-button">
                          <li role="menuitem" (click)="onEditarMovimiento(movimiento)">
                            <a class="dropdown-item" >Editar</a>
                          </li>
                          <li role="menuitem" (click)="onAsignarPrecio(movimiento)">
                            <a class="dropdown-item" >Asignar Precio Puro</a>
                          </li>
                          <li role="menuitem" (click)="onEliminarMovimiento(movimiento)">
                            <a class="dropdown-item" >Quitar</a>
                          </li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
              </div>
              <table style="width: 100%">
                <tfoot>
                   <tr>
                      <td style="width: 60%"></td>
                      <td style="width: 20%; text-align: right;"><strong>Total:</strong></td>
                      <td style="width: 20%"> {{_totalMovimientos|number:'1.2-2'|montoBs}}</td>
                   </tr>
                   <tr style="text-align: right;">
                      <td style="width: 60%"></td>
                      <td style="width: 20%; text-align: right;"><strong>Total Gramos :</strong></td>
                      <td style="width: 20%">{{_totalGramosMovimientos|number:'1.2-2'}}</td>
                   </tr>
                </tfoot>
              </table>
            </div>

            <div class="col-md-12">
              <h3 class="page-header">
                <button type="button" class="btn btn-default btn-xs" (click)="onAgregarAbono()">+</button>
                Abonos
              </h3>
             <span *ngIf="formErrors.abonos" id="errornegocio_id" class="help-block">{{ formErrors.abonos}}</span>
              <div class="table-responsive" style="height:200px; overflow:auto;">
              <table class="table">
                <thead>
                  <tr class="active">
                    <th style="width: 20%">Id</th>
                    <th style="width: 20%">Tipo</th>
                    <th style="width: 20%">Fecha</th>
                    <th style="width: 20%">Cantidad</th>
                    <th style="width: 20%">Total</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr *ngFor="let abono of abonos">
                    <td style="width: 20%"><span>{{abono.id}}</span></td>
                    <td style="width: 20%"><span>{{abono.tipo.tipo}}</span></td>
                    <td style="width: 20%"><span>{{abono.fecha}}</span></td>
                    <td style="width: 20%"><span>{{abono|cantidadAbono}}</span></td>
                    <td style="width: 20%"><span>{{abono.saldo|number:'1.2-2'|montoBs}}</span></td>
                    <td align="right">
                      <span  dropdown > 
                        <span class="glyphicon glyphicon-th" aria-hidden="true" dropdownToggle ></span>
                        <ul class="dropdown-menu dropdown-menu-right " dropdownMenu  role="menu" aria-labelledby="split-button">
                          <li role="menuitem" (click)="onEditarAbono(abono)">
                            <a class="dropdown-item" >Editar</a>
                          </li>
                          <li role="menuitem" (click)="onEliminarAbono(abono)">
                            <a class="dropdown-item" >Quitar</a>
                          </li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
              </div>
              <table style="width: 100%">
                <tfoot>
                   <tr style="text-align: right;">
                      <td style="width: 60%"></td>
                      <td style="width: 20%;text-align: right;"><strong>Total:</strong></td>
                      <td style="width: 20%"> {{_totalAbonos|number:'1.2-2'|montoBs}}</td>
                   </tr>
                </tfoot>
              </table>
            </div>
            <div class="col-md-12" style="margin-top: 20px;" >
              <div class="  pull-right">
                <input type="button" class="btn btn-primary" (click)="onGuardar('guardarcerrar')" value="Guardar & Cerrar">
                <input type="button" class="btn btn-primary" (click)="onGuardar('guardar')" value="Guardar">
              </div>
            </div>
          </div>
        </tab>
        <tab heading="Editar Abono" [disabled]="abonoDisabled" [active]="abonoActive">
           <cierre-edit-abono-component></cierre-edit-abono-component>
        </tab>
        <tab heading="Editar Movimiento"  [disabled]="movimientoDisabled" [active]="movimientoActive">
           <cierre-edit-movimiento-component></cierre-edit-movimiento-component>
        </tab>
        <tab heading="Asignar Precio Material" [disabled]="movimientoMaterialDisabled" [active]="movimientoMaterialActive">
           <cierre-edit-asignar-precio-movimiento-component></cierre-edit-asignar-precio-movimiento-component>
        </tab>
      </tabset>
    </div>
  </div>
</div>
</div>
</div>
  `,
  providers: [CierreService]
})
export class CierreEditComponent implements OnInit {

  @ViewChild('modal') modal: ModalDirective;

  @ViewChild(CierreEditAbonoComponent) 
  cierreEditAbonoComponent: CierreEditAbonoComponent;


  @ViewChild(CierreEditMovimientoComponent) 
  cierreEditMovimientoComponent: CierreEditMovimientoComponent;

  @ViewChild(CierreEditAsignarPrecioMovimientoComponent)
  cierreEditAsignarPrecioMovimientoComponent : CierreEditAsignarPrecioMovimientoComponent;


  abonoDisabled: boolean = true
  abonoActive: boolean = false

  cierreActive: boolean =true 
  cierreDisabled: boolean = false

  movimientoDisabled: boolean = true
  movimientoActive: boolean = false

  movimientoMaterialDisabled: boolean = true
  movimientoMaterialActive: boolean = false

  component : CierresComponent;
  cierre: Cierre;
  movimientos : Movimiento[]
  abonos      : Abono[]
  jnegocio: any;
  jfecha: any;
  negocio_id: number;
  _totalMovimientos: number = 0.0;
  _totalGramosMovimientos: number =  0.0;
  _totalAbonos:number = 0.0
  total: number= 0.0;

  private formErrors: any = {
    negocio_id: '',
    fecha: '',
    movimientos: '',
    abonos: '',
  };

  constructor( private cierreService: CierreService,
               private fB: FormBuilder,
               private abonoService: AbonoService,
               private movimientoService : MovimientoService,
               private _changeDetectionRef: ChangeDetectorRef ) {

  }

  onValueChanged(data?: any) {
    this.formErrors.nombre  = "";
  }

  onGuardar(operacion: string): void {
    let cierre = new Cierre
    cierre.id = this.cierre.id
    cierre.negocio_id = this.negocio_id
    cierre.fecha = this.jfecha.val()
    cierre.abonos = this.abonos
    cierre.movimientos = this.movimientos
    this.cierreService.guardar(cierre,operacion).then(cierre => {
      this.component.changeTable(cierre);
      this.hideModal();
    }).catch((errores)=>{
      this.formErrors['negocio_id'] =  errores.negocio_id;
      this.formErrors['fecha'] =  errores.fecha;
      this.formErrors['movimientos'] =  errores.movimientos;
      this.formErrors['abonos'] =  errores.abonos;
    });
  }

  ngOnInit(): void {
    this.abonoDisabled= true
    this.modal.onShown.subscribe((event : any) => {
      this.jnegocio = JqueryComponent.negocios("#negocio_id",this.cierre.negocio);
      this.jnegocio.on('select2:select',()=>{
        this.formErrors['negocio_id'] = '';
        this.limpiarFormulario()
        this.cargarDetalle()
      });
     this.jfecha = JqueryComponent.fecha("#fecha",this.cierre.fecha)
    });
  }

  limpiarFormulario():void {
    this.abonoDisabled = true
    this.abonoActive   = false
    this.cierreActive  = true;
    this.movimientoDisabled  = true
    this.movimientoActive = false
    this.movimientos = []
    this.abonos      = []
    this._totalMovimientos = 0.0;
    this._totalGramosMovimientos = 0.0
    this._totalAbonos = 0.0
    this.total = 0.0
  }

  cargarMovimientos(id: any): void{
    this.cierreService.movimientospendites(id).subscribe(resp => {
      this.movimientos = resp
      this.totalMovimiento()
    });
    this.formErrors['movimientos'] =  '';
  }

  cargarAbonos(id: any): void{
    this.cierreService.abonospendientes(id).subscribe(resp => {
      this.abonos = resp
      this.totalAbonos()
    });
    this.formErrors['abonos'] =  '';
  }

  cargarDetalle(): void{
    this.negocio_id = this.jnegocio.val()
    if(this.negocio_id){
      this.cargarMovimientos(this.negocio_id)
      this.cargarAbonos(this.negocio_id)
    }
  }


  setModel(cierre: Cierre): void {
    this.limpiarFormulario()
    if(cierre.id){
      console.log("Gogogogogogo Aqui EStoy ")
      this.cierreService.getCierre(cierre.id).then(resp =>{
        this.cierre = resp;
        this.negocio_id = cierre.negocio_id;
        this.abonos = resp.abonos;
        this.movimientos = resp.movimientos;
        this.totalMovimiento()
        this.totalAbonos()
      })
    }else{
      this.cierre = cierre;
      this.negocio_id = null
      if(this.negocio_id){
        this.cargarMovimientos(this.negocio_id)
        this.cargarAbonos(this.negocio_id)
      }
    }
  }

  openModal(component: CierresComponent) :void {
    this.component = component;
    this.modal.show();
  }

  hideModal(): void {
    this.modal.hide();
  }

  totalMovimiento(): void {
    this._totalMovimientos = 0.0
    this._totalGramosMovimientos = 0.0
    for(let movimiento of this.movimientos) {
      this._totalMovimientos += movimiento.saldo;
      this._totalGramosMovimientos += this.totalGramo(movimiento);
    }
    this.total = this._totalAbonos - this._totalMovimientos;
  }

  totalAbonos(): void {
    this._totalAbonos = 0.0
    for(let abono of this.abonos) {
      this._totalAbonos += abono.saldo;
    }
    this.total = this._totalAbonos - this._totalMovimientos;
  }

  totalGramo(movimiento: Movimiento): number {
    return (movimiento.precio_puro === 0 || 
          movimiento.precio_puro == undefined? 
            0: movimiento.saldo /  movimiento.precio_puro )
  }

  onAgregarAbono(): void {
    if(this.negocio_id){
      let abono = new Abono();
      abono.negocio_id= this.negocio_id;
      this.abonoDisabled = false;
      this.abonoActive = true;
      this.cierreActive = false
      this.cierreDisabled = true
      this._changeDetectionRef.detectChanges();
      this.cierreEditAbonoComponent.setModel(abono,this);
    }
    else{
      alert("Seleccione negocio o cierre ")
    }
  }

  onAgregarMovimiento(): void {
    if(this.negocio_id){
      let movimiento = new Movimiento();
      movimiento.negocio_id= this.negocio_id;
      this.movimientoDisabled = false;
      this.movimientoActive = true;
      this.cierreActive = false
      this.cierreDisabled = true
      this.cierreEditMovimientoComponent.setModel(movimiento,this);
    }
    else{
      alert("Seleccione negocio o cierre ")
    }
  }

  agregarEditarAbono(abono: Abono){
    this.formErrors['abonos'] =  '';
    this.abonoDisabled = true
    this.abonoActive = false
    this.cierreActive = true
    this.cierreDisabled = false
    for(let m in this.abonos)
    {
      if(this.abonos[m].id === abono.id )
      {
        this.abonos[m] = abono;
        this.totalAbonos();
        return;
      }
    }
    this.abonos.push(abono);
    this.totalAbonos();
  }

  agregarEditarMovimiento(movimiento :Movimiento ):void {
    this.formErrors['movimientos'] =  '';
    this.movimientoDisabled = true
    this.movimientoActive = false
    this.movimientoMaterialDisabled = true
    this.movimientoMaterialActive = false

    this.cierreActive = true
    this.cierreDisabled = false
    for(let m in this.movimientos)
    {
      if(this.movimientos[m].id === movimiento.id )
      {
        this.movimientos[m] = movimiento;
        this.totalMovimiento();
        return;
      }
    }
    this.movimientos.push(movimiento);
    this.totalMovimiento();
  }

  onEditarAbono(abono: Abono) :void {
    if(this.negocio_id){
      abono.negocio_id= this.negocio_id;
      this.abonoDisabled = false;
      this.abonoActive = true;
      this.cierreActive = false
      this.cierreDisabled = true 
      //this._changeDetectionRef.detectChanges();
      this.cierreEditAbonoComponent.setModel(abono,this);
    }
    else{
      alert("Seleccione negocio o cierre ")
    }
  }

  onEditarMovimiento(movimiento: Movimiento) :void {
    if(this.negocio_id){
      movimiento.negocio_id= this.negocio_id;
      this.movimientoDisabled = false;
      this.movimientoActive = true;
      this.cierreActive = false
      this.cierreDisabled = true 
      ///this._changeDetectionRef.detectChanges();
      this.cierreEditMovimientoComponent.setModel(movimiento,this);
    }
    else{
      alert("Seleccione negocio o cierre ")
    }
  }

  onAsignarPrecio(movimiento: Movimiento):void {
    if(this.negocio_id){
      movimiento.negocio_id= this.negocio_id;
      this.movimientoMaterialDisabled = false;
      this.movimientoMaterialActive = true;
      this.cierreActive = false
      this.cierreDisabled = true
      ///this._changeDetectionRef.detectChanges();
      this.cierreEditAsignarPrecioMovimientoComponent.setModel(movimiento,this);
    }
    else{
      alert("Seleccione negocio o cierre ")
    }
  }


  onEliminarAbono(abono: Abono) :void{
    for(let m in this.abonos){
      if(this.abonos[m].id === abono.id) {
        let position = +m 
        this.abonos.splice(position,1)
        this.totalAbonos()
        return;
      }
    }
  }

  onEliminarMovimiento(movimiento :Movimiento) :void{
    for(let m in this.movimientos) {
      if(this.movimientos[m].id === movimiento.id ) {
        let position = +m 
        this.movimientos.splice(position,1)
        this.totalMovimiento()
        return;
      }
    }
  } 

  onActivarCierre(): void {
    this.abonoDisabled = true
    this.abonoActive   = false
    this.cierreActive  =true 
    this.cierreDisabled = false
    this.movimientoDisabled = true
    this.movimientoActive = false
    this.movimientoMaterialDisabled = true
    this.movimientoMaterialActive  = false
  }
} 