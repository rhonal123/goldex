import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { User } from './../../models/user';
import { Prestamo } from './../../models/prestamo';
import { UsuarioService } from './../../services/usuario.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { Permiso } from './../../models/permiso';
import { Observable }     from 'rxjs/Observable';
import {Subscription} from 'rxjs';


@Component({
  selector: 'usuario-permiso-component',
  templateUrl: 'app/templates/usuarios/usuario.permisos.component.html',
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

  private prestamosPermisos  =  [
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


