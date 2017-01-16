import { Headers, Http , RequestOptions, Response,  HttpModule, URLSearchParams, BrowserXhr } from '@angular/http';
import { Injectable,  ViewChild, ElementRef } from '@angular/core';
import { Paginacion } from '../models/paginacion';
import { Observable }     from 'rxjs/Observable';
import { GeneralServicio } from './general.servicio'; 
import { Abono } from '../models/abono';

import 'rxjs/add/operator/toPromise';

@Injectable()
export class PdfService extends BrowserXhr {

	constructor(private http: Http) {
    super()
  }

  movimientos() {
    return this.http.get("url")
        .map((res:Response) => res.blob())
        .subscribe(
          data => {
            console.log(data);
            let blob = new Blob([data], {type: 'application/pdf'});
            console.log(blob);
                saveAs(blob, "testData.pdf");

        },
            err => console.error(err),
        () => console.log('done')
    );
  }





}