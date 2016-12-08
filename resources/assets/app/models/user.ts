


export class User {


  id: number;
  name: string;
  email: string;
  created_at: string;
  updated_at: string;
  
  constructor( ) {
  	this.name = null;
  	this.id= null;
    this.email = null;
  	this.created_at = null;
 		this.updated_at = null;

  }

 	static clone(user: User): User {
     let _user = new User();
     _user.id = user.id;
     _user.name = user.name;
     _user.email = user.email;
     _user.created_at = user.created_at;
     _user.updated_at = user.updated_at;
    return _user;
  }


}

 