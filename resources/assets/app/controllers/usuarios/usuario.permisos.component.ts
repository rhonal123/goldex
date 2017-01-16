import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { User } from './../../models/user';
import { UsuarioService } from './../../services/usuario.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { Permiso } from './../../models/permiso';
import { Observable }     from 'rxjs/Observable';
import {Subscription} from 'rxjs';


@Component({
  selector: 'usuario-permiso-component',
  template: `
<div bsModal #modal="bs-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" style="width:85%; height:80%;">
<div class="modal-content" *ngIf="user">
  <div class="modal-header">
    <button type="button" class="close" (click)="hideModal()" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title">Permisos Usuario {{user.id}}</h4>
  </div>
  <div class="modal-body">
    <div class="panel-body">
      <div  class="col-md-12">
        <div class="col-md-4">
          <blockquote>
            <p><label>Nombre :</label>{{user.name}}</p>
          </blockquote>
        </div>
        <div class="col-md-4">
          <blockquote>
            <p><label>Email :</label>{{user.email}}</p>
           </blockquote>
        </div>

        <div class="col-md-4">
          <blockquote>
           <p><label>Administador :</label>{{user.administrador|administrador}}</p>
          </blockquote>
        </div>
      </div>

      <div class="col-md-12" *ngIf="!permisos">
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                Cargando Permisos 
          </div>
        </div>
      </div>

      <div class="col-md-6" *ngIf="permisos">
        <div class="panel panel-default">
          <div class="panel-heading">Permisos Bancos</div>
          <div class="panel-body">
            <ul class="list-group">
              <li *ngFor="let permiso of bancosPermisos"  class="list-group-item">
              {{permiso.accion}}
              <button type="button" [ngClass]="{'btn': true,'btn-xs':true,'btn-danger': hasPermiso(permiso),'btn-success': noHasPermiso(permiso),'pull-right': true}" (click)="agregarQuitarPermiso(permiso)">
                <span [ngClass]="{'glyphicon': true, 'glyphicon-minus': hasPermiso(permiso),'glyphicon-plus': noHasPermiso(permiso)}" aria-hidden="true"></span>
              </button>     
              </li>
            </ul>
            </div>
        </div>
      </div>

      <div class="col-md-6" *ngIf="permisos">
        <div class="panel panel-default">
          <div class="panel-heading">Permisos Cuentas</div>
          <div class="panel-body">
            <ul class="list-group">
              <li *ngFor="let permiso of cuentasPermisos"  class="list-group-item">
              {{permiso.accion}}
              <button type="button" [ngClass]="{'btn': true,'btn-xs':true,'btn-danger': hasPermiso(permiso),'btn-success': noHasPermiso(permiso),'pull-right': true}" (click)="agregarQuitarPermiso(permiso)">
                <span [ngClass]="{'glyphicon': true, 'glyphicon-minus': hasPermiso(permiso),'glyphicon-plus': noHasPermiso(permiso)}" aria-hidden="true"></span>
              </button>     
              </li>
            </ul>
            </div>
        </div>
      </div>

      <div class="col-md-6" *ngIf="permisos">
        <div class="panel panel-default">
          <div class="panel-heading">Permisos Negocios</div>
          <div class="panel-body">
            <ul class="list-group">
              <li *ngFor="let permiso of negociosPermisos"  class="list-group-item">
              {{permiso.accion}}
               <button type="button" [ngClass]="{'btn': true,'btn-xs':true,'btn-danger': hasPermiso(permiso),'btn-success': noHasPermiso(permiso),'pull-right': true}" (click)="agregarQuitarPermiso(permiso)">
                <span [ngClass]="{'glyphicon': true, 'glyphicon-minus': hasPermiso(permiso),'glyphicon-plus': noHasPermiso(permiso)}" aria-hidden="true"></span>
              </button>         
              </li>
            </ul>
            </div>
        </div>
      </div> 

      <div class="col-md-6" *ngIf="permisos">
        <div class="panel panel-default">
          <div class="panel-heading">Permisos Cierres</div>
          <div class="panel-body">
            <ul class="list-group">
              <li *ngFor="let permiso of cierresPermisos"  class="list-group-item">
              {{permiso.accion}}
               <button type="button" [ngClass]="{'btn': true,'btn-xs':true,'btn-danger': hasPermiso(permiso),'btn-success': noHasPermiso(permiso),'pull-right': true}" (click)="agregarQuitarPermiso(permiso)">
                <span [ngClass]="{'glyphicon': true, 'glyphicon-minus': hasPermiso(permiso),'glyphicon-plus': noHasPermiso(permiso)}" aria-hidden="true"></span>
              </button>         
              </li>
            </ul>
            </div>
        </div>
      </div> 

      <div class="col-md-6" *ngIf="permisos">
        <div class="panel panel-default">
          <div class="panel-heading">Permisos Abonos</div>
          <div class="panel-body">
            <ul class="list-group">
              <li *ngFor="let permiso of abonosPermisos"  class="list-group-item">
              {{permiso.accion}}
               <button type="button" [ngClass]="{'btn': true,'btn-xs':true,'btn-danger': hasPermiso(permiso),'btn-success': noHasPermiso(permiso),'pull-right': true}" (click)="agregarQuitarPermiso(permiso)">
                <span [ngClass]="{'glyphicon': true, 'glyphicon-minus': hasPermiso(permiso),'glyphicon-plus': noHasPermiso(permiso)}" aria-hidden="true"></span>
              </button>         
              </li>
            </ul>
            </div>
        </div>
      </div> 

      <div class="col-md-6" *ngIf="permisos">
        <div class="panel panel-default">
          <div class="panel-heading">Permisos Tipos</div>
          <div class="panel-body">
            <ul class="list-group">
              <li *ngFor="let permiso of tiposPermisos"  class="list-group-item">
              {{permiso.accion}}
               <button type="button" [ngClass]="{'btn': true,'btn-xs':true,'btn-danger': hasPermiso(permiso),'btn-success': noHasPermiso(permiso),'pull-right': true}" (click)="agregarQuitarPermiso(permiso)">
                <span [ngClass]="{'glyphicon': true, 'glyphicon-minus': hasPermiso(permiso),'glyphicon-plus': noHasPermiso(permiso)}" aria-hidden="true"></span>
              </button>         
              </li>
            </ul>
            </div>
        </div>
      </div> 

      <div class="col-md-6" *ngIf="permisos">
        <div class="panel panel-default">
          <div class="panel-heading">Permisos Movimientos</div>
          <div class="panel-body">
            <ul class="list-group">
              <li *ngFor="let permiso of movimientosPermisos"  class="list-group-item">
              {{permiso.accion}}
               <button type="button" [ngClass]="{'btn': true,'btn-xs':true,'btn-danger': hasPermiso(permiso),'btn-success': noHasPermiso(permiso),'pull-right': true}" (click)="agregarQuitarPermiso(permiso)">
                <span [ngClass]="{'glyphicon': true, 'glyphicon-minus': hasPermiso(permiso),'glyphicon-plus': noHasPermiso(permiso)}" aria-hidden="true"></span>
              </button>         
              </li>
            </ul>
            </div>
        </div>
      </div> 

      <div class="col-md-6" *ngIf="permisos">
        <div class="panel panel-default">
          <div class="panel-heading">Permisos Usuarios</div>
          <div class="panel-body">
            <ul class="list-group">
              <li *ngFor="let permiso of usuariosPermisos"  class="list-group-item">
              {{permiso.accion}}
              <button type="button" [ngClass]="{'btn': true,'btn-xs':true,'btn-danger': hasPermiso(permiso),'btn-success': noHasPermiso(permiso),'pull-right': true}" (click)="agregarQuitarPermiso(permiso)">
                <span [ngClass]="{'glyphicon': true, 'glyphicon-minus': hasPermiso(permiso),'glyphicon-plus': noHasPermiso(permiso)}" aria-hidden="true"></span>
              </button>        
              </li>
            </ul>
            </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
</div>
  `,
  providers: [UsuarioService]
})
export class UsuarioPermisosComponent implements OnInit {

  private user: User;
  private permisos:Permiso[];
  private observable:  Observable<Permiso[]>;
  private subscription : Subscription;

  private bancosPermisos  =  [
    { codigo: 'A01' , accion : 'Mostrar Detalle '},
    { codigo: 'A02' , accion : 'Eliminar'},
    { codigo: 'A03' , accion : 'Editar'},
    { codigo: 'A04' , accion : 'Crear'},
    { codigo: 'A05' , accion : 'Listar'},
  ]

  private cuentasPermisos  =  [
    {  codigo: 'B01' , accion : 'Mostrar Detalle ' },
    {  codigo: 'B02' , accion : 'Eliminar' },
    {  codigo: 'B03' , accion : 'Editar' },
    {  codigo: 'B04' , accion : 'Crear' },
    {  codigo: 'B05' , accion : 'Listar' },
  ]

  private negociosPermisos  =  [
    {  codigo: 'C01' , accion : 'Mostrar Detalle ' },
    {  codigo: 'C02' , accion : 'Eliminar' },
    {  codigo: 'C03' , accion : 'Editar' },
    {  codigo: 'C04' , accion : 'Crear' },
    {  codigo: 'C05' , accion : 'Listar' },
  ]

  private cierresPermisos  =  [
    {  codigo: 'D01' , accion : 'Mostrar Detalle ' },
    {  codigo: 'D02' , accion : 'Eliminar' },
    {  codigo: 'D03' , accion : 'Editar' },
    {  codigo: 'D04' , accion : 'Crear' },
    {  codigo: 'D05' , accion : 'Listar' },
  ]

  private usuariosPermisos  =  [
    {  codigo: 'E01' , accion : 'Mostrar Detalle ' },
    {  codigo: 'E02' , accion : 'Eliminar' },
    {  codigo: 'E03' , accion : 'Editar' },
    {  codigo: 'E04' , accion : 'Crear' },
    {  codigo: 'E05' , accion : 'Listar' },
    { codigo: 'E06' , accion : 'Cambiar Contraseña'},
    { codigo: 'E07' , accion : 'Permisos'},
  ]

  private abonosPermisos  =  [
    {  codigo: 'F01' , accion : 'Mostrar Detalle ' },
    {  codigo: 'F02' , accion : 'Eliminar' },
    {  codigo: 'F03' , accion : 'Editar' },
    {  codigo: 'F04' , accion : 'Crear' },
    {  codigo: 'F05' , accion : 'Listar' },
  ]

  private tiposPermisos  =  [
    {  codigo: 'G01' , accion : 'Mostrar Detalle ' },
    {  codigo: 'G02' , accion : 'Eliminar' },
    {  codigo: 'G03' , accion : 'Editar' },
    {  codigo: 'G04' , accion : 'Crear' },
    {  codigo: 'G05' , accion : 'Listar' },
  ]

  private movimientosPermisos  =  [
    {  codigo: 'I01' , accion : 'Mostrar Detalle ' },
    {  codigo: 'I02' , accion : 'Eliminar' },
    {  codigo: 'I03' , accion : 'Editar' },
    {  codigo: 'I04' , accion : 'Crear' },
    {  codigo: 'I05' , accion : 'Listar' },
    {  codigo: 'I06' , accion : 'Asignar Precio Puro' },
    {  codigo: 'I07' , accion : 'reporte' },
  ]

  @ViewChild('modal') modal: ModalDirective;
  constructor(private userService: UsuarioService) {
       
  }
  ngOnInit(): void {
  }

  setModel(user :User): void {
    this.permisos = null;
    this.user = user;
    if(!!this.subscription)
    {
      this.subscription.unsubscribe()
    }
    this.observable = this.userService.permisos(user);
    this.subscription = this.observable.subscribe(permisos  => {
      this.permisos = permisos;
    })
  }

  hideModal(): void {
    this.modal.hide();
  }

  openModal() :void {
    this.modal.show();
  }

  hasPermiso(permiso :Permiso ): boolean {
    return this.permisos.filter((elemento) => elemento.codigo == permiso.codigo).length != 0;
  }

  noHasPermiso(permiso :Permiso ): boolean {
    return !this.hasPermiso(permiso);
  }


  agregarQuitarPermiso(permiso:Permiso) :void{
    let bien = (permisos: Permiso[]) => {
        this.permisos = permisos;  
    }
    let error = (error :any) =>{
      alert(`error al intentar Agregar el Permiso`);
    }

    if(this.hasPermiso(permiso)){
      this.userService
        .quitarPermiso(this.user,permiso)
        .then(bien)
        .catch(error);
    }
    else{
      this.userService
        .agregarPermiso(this.user,permiso)
        .then(bien)
        .catch(error);
    }
  }


}


