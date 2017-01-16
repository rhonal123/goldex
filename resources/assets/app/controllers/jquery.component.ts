import { Cuenta } from './../models/cuenta';
import { Tipo } from './../models/tipo';
import { Negocio } from './../models/negocio';
import { Banco } from './../models/banco';

declare var $: any;
let capitalize= (cadena: string ) => cadena.replace(/\b\w/g,(e:string)=> e.toUpperCase());



export class JqueryComponent {

  public static  proceData = (params: any) => {
	  return {
	    search: params.term,
	    page: params.page
	  };
  }

	public static processResults =  (data: any, params: any) => {
	  params.page = params.page || 1;
	  return {
	    results: data.data,
	    pagination: {
	      more: (params.page * data.per_page) < data.total
	      }
	  };
	}

	public static fecha(name: string,value?: any): any {
		let today = new Date();
		value = (value? value :  `${today.getFullYear()}/${today.getMonth()+1}/${today.getDate()}`);
		return ($(name) as any )
			.datepicker({format: "yyyy/mm/dd"})
			.datepicker("setDate",value);
	}

	public static fechaSinValorIncial(name: string,): any {
		return ($(name) as any )
			.datepicker({format: "yyyy/mm/dd"});
	}


	public static negocios(name: string, value?: Negocio) :any  {
	  let formato = (obj: any) : string => {
	  	return (obj.text? obj.text:capitalize(` ${obj.rif} ${obj.nombre}`));
	  };
    $(name).empty();
    if(value)
    {
      let op =  document.createElement("option");
      op.setAttribute("value",value.id.toString());
      op.appendChild(document.createTextNode(formato(value)));
      $(name).empty();
      $(name).append(op);
    }
    $(name).off('select2:select')
		return $(name).select2({
	    ajax: {
	      url: "/webservices/negocios",
	      dataType: 'json',
	      delay: 250,
	      data: JqueryComponent.proceData,
	      processResults: JqueryComponent.processResults
	    },
	    placeholder: 'Seleccione un Negocio',
	    escapeMarkup: (markup: any) => markup, // let our custom formatter work
	    minimumInputLength: 0,
	    templateSelection: formato,
	    templateResult: formato,
		});
	}


	public static tipos(name: string, value?: Tipo ) :any  {
	  let formato = (obj: any) : string => {
	  	return (obj.text?  obj.text : capitalize(` ${obj.tipo} ${obj.simbolo}.`));
	  };
    $(name).empty();
    if(value)
    {
      let op =  document.createElement("option");
      op.setAttribute("value",value.id.toString());
      op.appendChild(document.createTextNode(formato(value)));
      $(name).empty();
      $(name).append(op);
    }
    $(name).off('select2:select')
		return $(name).select2({
	    ajax: {
	      url: "/webservices/tipos",
	      dataType: 'json',
	      delay: 250,
	      data: JqueryComponent.proceData,
	      processResults: JqueryComponent.processResults
	    },
	    placeholder: 'Seleccione un Tipo',
	    escapeMarkup: (markup: any) => markup, // let our custom formatter work
	    minimumInputLength: 0,
	    templateSelection: formato,
	    templateResult: formato,
		});
	}
 
  public static cuentas(name: string, value?: Cuenta ): any {
	  let formato = (obj: any) : string => {
	  	return (obj.text?  obj.text : capitalize(` ${obj.banco.nombre} ${obj.numero}.`));
	  };
	  $(name).empty();
    if(value)
    {
      let op =  document.createElement("option");
      op.setAttribute("value",value.id.toString());
      op.appendChild(document.createTextNode(formato(value)));
      $(name).empty();
      $(name).append(op);
    }
    $(name).off('select2:select')
  	return $(name).select2({
      ajax: {
        url: "/webservices/cuentas",
        dataType: 'json',
        delay: 250,
	      data: JqueryComponent.proceData,
	      processResults: JqueryComponent.processResults
      },
      placeholder: 'Seleccione una Cuenta ',
      escapeMarkup: (markup : any) => markup, // let our custom formatter work
      minimumInputLength: 0,
	    templateSelection: formato,
	    templateResult: formato,
    }); 
  }

  public static bancos(name: string, value?: Banco ): any {
	  let formato = (obj: any) : string => {
	  	return (obj.text?  obj.text : capitalize(` ${obj.nombre}.`));
	  };
    $(name).empty();
    if(value)
    {
      let op =  document.createElement("option");
      op.setAttribute("value",value.id.toString());
      op.appendChild(document.createTextNode(formato(value)));
      $(name).empty();
      $(name).append(op);
    }
    $(name).off('select2:select')
  	return $(name).select2({
      ajax: {
        url: "/webservices/bancos",
        dataType: 'json',
        delay: 250,
	      data: JqueryComponent.proceData,
	      processResults: JqueryComponent.processResults
      },
      placeholder: 'Seleccione una Banco ',
      escapeMarkup: (markup : any) => markup, // let our custom formatter work
      minimumInputLength: 0,
	    templateSelection: formato,
	    templateResult: formato,
    }); 
  }

  public static downloadPdf(url: string, name: string){
		window.open(url,"_blank");
		/*let a =  document.getElementById("downloadPdf");
    ///(a as any).style = "display: none";
    (a as any).href = url;
    (a as any).download = name;
    (a as any).click();
 	*/
    ///window.URL.revokeObjectURL(url);
  }

}