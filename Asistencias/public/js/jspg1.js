/*================== Paginación de la tabla ============================*/
    function Pager(tableName, itemsPerPage) { 
        this.tableName = tableName; 
        this.itemsPerPage = itemsPerPage; 
        this.currentPage = 1; 
        this.pages = 0; 
        this.inited = false; 
         
        this.showRecords = function(from, to) {         
            var rows = document.getElementById(tableName).rows; 
            // I comienza desde 1 para saltar la fila de encabezado de la tabla
            for (var i = 1; i < rows.length; i++) { 
                if (i < from || i > to)   
                    rows[i].style.display = 'none'; 
                else 
                    rows[i].style.display = ''; 
            } 
        } 
         
        this.showPage = function(pageNumber) { 
         if (! this.inited) { 
          alert("not inited"); 
          return; 
         } 
     
            var oldPageAnchor = document.getElementById('pg'+this.currentPage); 
            oldPageAnchor.className = 'pg-normal'; 
             
            this.currentPage = pageNumber; 
            var newPageAnchor = document.getElementById('pg'+this.currentPage); 
            newPageAnchor.className = 'pg-selected'; 
             
            var from = (pageNumber - 1) * itemsPerPage + 1; 
            var to = from + itemsPerPage - 1; 
            this.showRecords(from, to); 
        }    
         
        this.prev = function() { 
            if (this.currentPage > 1) 
                this.showPage(this.currentPage - 1); 
        } 
         
        this.next = function() { 
            if (this.currentPage < this.pages) { 
                this.showPage(this.currentPage + 1); 
            } 
        }                         
         
        this.init = function() { 
            var rows = document.getElementById(tableName).rows; 
            var records = (rows.length - 1);  
            this.pages = Math.ceil(records / itemsPerPage); 
            this.inited = true; 
        } 
     
        this.showPageNav = function(pagerName, positionId) { 
         if (! this.inited) { 
          alert("not inited"); 
          return; 
         } 
         var element = document.getElementById(positionId); 
          
         var pagerHtml = '<span onclick="' + pagerName + '.prev();" class="pg-normal"> « Prev </span> | '; 
            for (var page = 1; page <= this.pages; page++)  
                pagerHtml += '<span id="pg' + page + '" class="pg-normal" onclick="' + pagerName + '.showPage(' + page + ');">' + page + '</span> | '; 
            pagerHtml += '<span onclick="'+pagerName+'.next();" class="pg-normal"> Next »</span>';             
             
            element.innerHTML = pagerHtml; 
        } 
    } 
    
  /*================= buscador de tiempo real ==========================*/
  function Buscar(){
      
      var tablaReg =document.getElementById('resultado');
      var buscarTexto =document.getElementById('buscarTexto').value.toLowerCase();
      var celdasFilas = "";
      var respuesta = false;
      var compararCon = "";
      
      //Recorrer todas las filas con contenido de la tabla
      for(var i = 1; i < tablaReg.rows.length; i++ )
      {
          celdasFilas = tablaReg.rows[i].getElementsByTagName('td');
          respuesta = false;
          
        //Recorrer todas las celdas
        for(var j = 0; j < celdasFilas.length && !respuesta; j++)
        {
            
           compararCon = celdasFilas[j].innerHTML.toLowerCase();
           
           //Buscar el texto en el contenido de la celda
           if(buscarTexto.length === 0 || (compararCon.indexOf(buscarTexto) > -1))
           {
               respuesta = true;             
           }
        }
        if(respuesta){
            
            tablaReg.rows[i].style.display = '';
            
        }else{
            //si no ha encontrado ninguna coincidencia, esconde la fila de la tabla
            tablaReg.rows[i].style.display = 'none';
        }
          
      }     
  }



