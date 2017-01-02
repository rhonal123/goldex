import { Component, Input, OnInit, ViewChild,   AfterViewInit } from '@angular/core';
import { Router } from '@angular/router';
import { User } from './../../models/user';
import { Paginacion } from './../../models/paginacion';

import { UsuarioService } from './../../services/usuario.service';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 
import { Observable }     from 'rxjs/Observable';
import { URLSearchParams} from '@angular/http';  
import { UsuarioEditComponent } from './usuario.edit.component';
import { UsuarioDeleteComponent } from './usuario.delete.component';
import { UsuarioComponent } from './usuario.component';
import { ChangeDetectorRef } from '@angular/core';
import { UsuarioContrasenaComponent} from './usuario.contrasena.component';
import { UsuarioPermisosComponent} from './usuario.permisos.component';
 

@Component({
  selector: 'usuarios-component',
  templateUrl: 'app/templates/usuarios/usuarios.component.html',
  providers: [UsuarioService]
})
export class UsuariosComponent implements OnInit  , AfterViewInit {


  private users: User[];
  private user: User;
  private activeUser:  User;


  private per_page :number;
  private total :number;
  private current_page :number = 1;
  private last_page: number;
  private search: string;
  private sort: string = "id";
  private observable:  Observable<Paginacion>;
  private obser: any;
  //private loading: boolean;;
 
 

  @ViewChild('modal') modal: ModalDirective;
 

  @ViewChild(UsuarioComponent)
  userComponent: UsuarioComponent;

  @ViewChild(UsuarioEditComponent)
  userEditComponent: UsuarioEditComponent;

  @ViewChild(UsuarioDeleteComponent)
  userDeleteComponent: UsuarioDeleteComponent;


  @ViewChild(UsuarioContrasenaComponent)
  usuarioContrasenaComponent :UsuarioContrasenaComponent ;

  @ViewChild(UsuarioPermisosComponent)
  usuarioPermisosComponent :UsuarioPermisosComponent ;


  ngAfterViewInit() {

  }

  constructor( private route: Router,private userService: UsuarioService,private _changeDetectionRef: ChangeDetectorRef) {

  }

  loadTable(): void {
    if(this.obser != undefined){
      this.obser.unsubscribe();
    }
    this.observable = this.userService.getUsers(this.current_page.toString(),this.serach());
    this.obser = this.observable.subscribe(data =>{
        this.users = data.data;
        this.per_page= data.per_page;
        this.total= data.total;
        this.current_page= data.current_page;
        this.obser = undefined;
    });

  }

  ngOnInit(): void {
    this.loadTable(); 
  }


  agregar(): void {
  	let user = new User();
    this.user = user;
    this.userEditComponent.setModel(user)
    this.userEditComponent.openModal(this);
  }

  onSelect(user: User): void {
    this.user = user;
    this.userComponent.user = user;
    this.userComponent.openModal();
  }

	onEditar(user: User): void {
    this.user = user;
    this.userEditComponent.setModel(user)
    this.userEditComponent.openModal(this);
  }	

	onEliminar(user: User): void {
    this.user = user;
    this.userDeleteComponent.user = user;
    this.userDeleteComponent.openModal(this);
  }

  onPermiso(user: User): void {
    this.user = user;
    this.usuarioPermisosComponent.setModel(user);
    this.usuarioPermisosComponent.openModal( );
  }

 

   onCambiarContrasena(user: User): void {
    this.user = user;
    this.usuarioContrasenaComponent.setModel(user);
    this.usuarioContrasenaComponent.openModal(this);
   }

	changeTable(user: User): void 
	{
		for(let m in this.users)
		{
      console.log(this.users[m].id, " == ", user.id)
			if(this.users[m].id === user.id )
			{ console.log("entrooo")
				this.users[m] = user;
				return;
			}
		}
		this.users.push(user);
	}

  serach(): URLSearchParams {
    let param = new URLSearchParams();
    if(this.search)
    {
      param.set("search",this.search)
      param.set("sort",this.sort)
    }  
    return param;
  };

	eliminar(user : User): void 
	{
		for(let m in this.users)
		{
			if(this.users[m].id === user.id )
			{	console.log(this.users);
				let position = +m 
				this.users.splice(position,1)
				console.log(+m + 1);
				console.log(this.users);
				return;
			}
		}
	}


  pageChanged(event: any ): void 
  {
    this.current_page = event.page;
    this._changeDetectionRef.detectChanges();
    this.loadTable();
  }
 

  onActive(user: User  ): any {
    this.activeUser = user;
  }



 

}
   
 