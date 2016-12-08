import { Component,ViewContainerRef, ViewChild,  Input, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ModalDirective } from 'ng2-bootstrap/components/modal/modal.component'; 

@Component({
  selector: 'app-component',
  templateUrl: 'app/templates/app.component.html',
  providers: []
})
export class AppComponent  implements OnInit  {

  private viewContainerRef: ViewContainerRef;

  public constructor(private route: Router,viewContainerRef:ViewContainerRef) {
    // You need this small hack in order to catch application root view container ref
    this.viewContainerRef = viewContainerRef;
  }

  ngOnInit(): void {

  }

  
 
}
 
 