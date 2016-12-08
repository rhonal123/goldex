import { Component, Input, ViewContainerRef,  OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'index-component',
  templateUrl: 'app/templates/index.component.html'
})
export class IndexComponent implements OnInit {

  private viewContainerRef: ViewContainerRef;
  constructor( private route: Router, viewContainerRef:ViewContainerRef) {
  	    this.viewContainerRef = viewContainerRef;
   }

  ngOnInit(): void {

  }

}
 
