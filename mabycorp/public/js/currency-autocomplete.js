$(function(){
  var currencies = [
    { value: 'Ayudin', data: 'AFN' },
    { value: 'Lavavajillas', data: 'ALL' },
    { value: 'Lava', data: 'DZD' },
    /****************************************************/
    { value: 'Desinfectantes', data: 'EUR' },
    { value: 'Desinfectante Harpic', data: 'AOA' },
    { value: 'Desinfectante Poe', data: 'XCD' },
    { value: 'Pino Sol', data: 'ARW' },
    { value: 'Pato Tanque', data: 'AMD' },
    /******************************************/
    { value: 'Cera Limpiadora', data: 'AWG' },
    { value: 'Cera Autobrillante', data: 'AUD' },
    { value: 'Cera al Agua', data: 'AZN' },
    { value: 'Cera para Muebles', data: 'BSD' },
    { value: 'Cera en Pasta', data: 'BHD' },
    { value: 'cera para Auto', data: 'BDT' },
    { value: 'Cera Balde', data: 'BBD' },
    /*****************************************************/
    { value: 'Ambientador Poe', data: 'BYR' },
    { value: 'Ambientadores Glade', data: 'BZD' },
    { value: 'Ambientadores Johnson Glade', data: 'XOF' },
    { value: 'Ambientadores Dkasa', data: 'BTN' },
    /*************************************************/
    { value: 'Insecticidas', data: 'BOB' },
    { value: 'Diclotrin', data: 'BAM' },
    { value: 'Insecticida Baygon', data: 'BWP' },
    { value: 'Insecticida Raid', data: 'BRL' },
    { value: 'Insecticida Sapolio', data: 'BND' },
    { value: 'Insecticida Plop', data: 'BGN' },
    { value: 'Insecticida Vape Pastilla', data: 'BIF' },
    /*************************************************/
    { value: 'Detergente Bolivar', data: 'KHR' },
    { value: 'Detergente Ace', data: 'XAF' },
    { value: 'Detergente Ariel', data: 'CAD' },
    { value: 'Detergente Magia Blanca', data: 'CVE' },
    { value: 'Detergente Marsella', data: 'KYD' },
    { value: 'Detergente Liquido', data: 'CLP' },
    { value: 'Detergente Opal', data: 'CNY' },
    { value: 'Detergente Amor', data: 'COP' },
    /*************************************************/
    { value: 'Suavizantes', data: 'KMF' },
    { value: 'Suavizante Amor', data: 'CDF' },
    { value: 'Suavizantes Bolivar', data: 'CRC' },
    { value: 'Suavizantes Suavitel', data: 'HRK' },
    { value: 'Suavizante para Ropa', data: 'CUC' },
    /*****************************************************/
    { value: 'Shampoos', data: 'CZK' },
    { value: 'Shampoo Elvive', data: 'DKK' },
    { value: 'Shampoo Ammens', data: 'DJF' },
    { value: 'Shampoos Pantene', data: 'DOP' },
    { value: 'Shampoo Bio Expert', data: 'EGP' },
    { value: 'Shampoo Clear', data: 'GQE' },
    { value: 'Shampoo Dove', data: 'ERN' },
    { value: 'Shampoo Ego', data: 'EEK' },
    { value: 'Shampoo H&S', data: 'ETB' },
    { value: 'Shampoo Vitane', data: 'FKP' },
    { value: 'Shampoo Pert', data: 'FJD' },
    { value: 'Shampoo Sedal', data: 'XPF' },
    { value: 'Shampoos Konzil', data: 'GMD' },
    /*****************************/
    { value: 'Crema para peinar Sedal', data: 'GEL' },
    { value: 'Creama para peinar Pantene', data: 'GHS' },
    { value: 'Crema para peinar H&S', data: 'GIP' },
    { value: 'Crema para peinar Savital', data: 'GTQ' },
    { value: 'Crema para peinar Elvive', data: 'GNF' },
    { value: 'Crema para peinar Konzil', data: 'GYD' },
    { value: 'crema para peinar Muss Frizz', data: 'HTG' },
    /************************************************************/
    { value: 'Acondicionador Vitane', data: 'HNL' },
    { value: 'Acondicionador Johnson', data: 'HKD' },
    { value: 'Acondicionador Elvive', data: 'HUF' },
    { value: 'Acondicionador Sedal', data: 'ISK' },
    { value: 'Acondicionador Pantene', data: 'INR' },
    { value: 'Acondicionador Konzil', data: 'IDR' },
    { value: 'Acondicionador Bonawell', data: 'IRR' },
    { value: 'Acondicionador Bio Expert', data: 'IQD' },
    /************************************************************/
    { value: 'Talco Johnson Baby', data: 'ILS' },
    { value: 'Shampoo´Johnson Manzanilla', data: 'KES' },
    { value: 'Pañitos Humedos Pampers', data: 'KPW' },
    { value: 'Repelente Bacterión Baby', data: 'KRW' },
    /**********************************************************/
    { value: 'Comote Natuchips', data: 'KWD' },
    { value: 'Frito Lays Camote', data: 'KGS' },
    /****************************************************/
    { value: 'chifles Ariik', data: 'LAK' },
    { value: 'Chifles Crickets', data: 'LVL' },
    /***************************************************/
    { value: 'Chocolates Nueces Pasas', data: 'LSL' },
    { value: 'Chocolates Linaje Sentimientos', data: 'LRD' },
    { value: 'Chocolates de Costa Tuyo', data: 'LYD' },
    { value: 'Chocolates Huevito Princesa', data: 'LTL' },
    { value: 'Chocolate Valle', data: 'MOP' },
    { value: 'Chocolates Sublime', data: 'MKD' },
    /***************************************************/
    { value: 'Papas Fritas Pringles', data: 'MGA' },
    { value: 'Papas Lays Clasica', data: 'MWK' },
    { value: 'Papas Pringles Cebolla', data: 'MYR' },
    { value: 'Papas al Hilo', data: 'MVR' },
    { value: 'Papas Pringles Original', data: 'MRO' },
    { value: 'Piques snack', data: 'MUR' },
    /****************************************************/
    { value: 'Papel Higienico Elite Ultra', data: 'MXN' },
    { value: 'Papel Higienico Suave', data: 'MDL' },
    { value: 'Papel Higienico Doble Hoja', data: 'MNT' },

    /*****************************************************/
    { value: 'Protector Cofree MultiFlex', data: 'MAD' },
    { value: 'Protector Nosotras Diarios', data: 'MZM' },
    { value: 'Toallas Higienicas Nosotras Protectores', data: 'MMK' },
    /************************************************************************/
    { value: 'Toallas Higienicas Nosotras', data: 'NAD' },
    { value: 'Toallas Higienicas stayfree', data: 'NPR' },
    { value: 'Toallas Higienicas Always', data: 'ANG' },
    /**********************************************************/
    { value: 'Pañuelos Humedos Desechables', data: 'NZD' },
    /************************************************************/
    { value: 'Gelatina Leal', data: 'NIO' },
    { value: 'Gelatina Royal', data: 'NGN' },
    { value: 'Gelatina Universal', data: 'NOK' },
    { value: 'Gelatina Univerl Diet', data: 'OMR' },
    /****************************************************/
    { value: 'Mermelada A-1', data: 'PKR' },
    { value: 'Mermelada Compass', data: 'PAB' },
    { value: 'Mermelada Fanny', data: 'PGK' },
    { value: 'Mermelada Fanny Deli', data: 'PYG' },
    { value: 'Mermelada Gloria', data: 'PEN' },
    { value: 'Mermelada A-1 Fresa', data: 'PEN' },
    /********************************************************/
    { value: 'Crema de Leche Gloria', data: 'PHP' },
    { value: 'Crema de Leche Nestle', data: 'PLN' },
    { value: 'Leche Condensada Gloria', data: 'QAR' },
    /****************************************************/
    { value: 'Caramelo Ambrosoli', data: 'RON' },
    { value: 'Caramelo Colombina', data: 'RUB' },
    { value: 'Caramelo Tic Tac', data: 'RWF' },
    { value: 'Caramelo Halls', data: 'SHP' },
    { value: 'Caramelo Sayon', data: 'WST' },
    { value: 'Caramelos Mentos', data: 'STD' },
    { value: 'Caramelo winters', data: 'SAR' },
    /****************************************************/
    { value: 'Galletas Costa de Agua', data: 'RSD' },
    { value: 'Galleta costa Gran Cereal', data: 'SCR' },
    { value: 'Galleta Field', data: 'SLL' },
    { value: 'Galletas Chinchin', data: 'SGD' },
    { value: 'Galletas Costa Caritas', data: 'SKK' },
    { value: 'Galletas Colombina', data: 'SBD' },
    { value: 'Galletas Costa Frac', data: 'SOS' },
    { value: 'Galletas Waffer Nik', data: 'ZAR' },
    { value: 'Galletas Ducales', data: 'SDG' },
    { value: 'Galletas Cream Crackers', data: 'LKR' },
    { value: 'Galletas Rellenitas', data: 'SDG' },
    { value: 'Galletas Morochas', data: 'SRD' },
    /**************************************************/
    { value: 'Galletas Costa Integrales', data: 'SZL' },
    { value: 'Galletas Crisinos', data: 'SEK' },
    { value: 'Galletas Mana', data: 'CHF' },
    { value: 'Galletas Mana Dieteticas', data: 'SYP' },
    /*******************************************************/
    { value: 'Galletas Wafer', data: 'TWD' },
    { value: 'Galletas Nik', data: 'TJS' },
    { value: 'Tanzanian shilling', data: 'TZS' },
    { value: 'Galletas Tuyo', data: 'THB' },
    /********************************************/
    { value: 'Yogurt Gloria', data: 'TOP' },
    { value: 'Yogurt DanLac', data: 'TTD' },
    { value: 'Yogurt Gloria Actibio', data: 'TND' },
    { value: 'Yogurt Gloria BattiShake', data: 'TRY' },
    /*******************************************************/
    { value: 'Cereal Angel', data: 'TMM' },
    { value: 'Cereal Cornk Flakes', data: 'UGX' },
    { value: 'Cereal Maiz', data: 'UAH' },
    { value: 'Cereal Automico', data: 'AED' },
    { value: 'Cereal Gloria', data: 'GBP' },
    { value: 'Cereal en Caja', data: 'USD' },
    /************************************************/
    { value: 'Jugo Aquarius', data: 'UYU' },
    { value: 'Jugo Aruba', data: 'UZS' },
    { value: 'Jugo Citrus', data: 'VUV' },
    { value: 'Jugo Cifrut Tropical', data: 'VEB' },
    { value: 'Jugo Aruba Durazno', data: 'VND' },
    /*************************************************/
    { value: 'Bebida Rehidratante Sporade', data: 'YER' },
    { value: 'Rehidratante Sporade Blueberry', data: 'ZMK' },
   /***********************************************/
    { value: 'Aceite A-1', data: 'YER' },
    { value: 'Aceite Capri', data: 'ZMK' },
    { value: 'Aceite Costeño', data: 'YER' },
    { value: 'Aceite de Canola', data: 'ZMK' },
    { value: 'Aceite Primor', data: 'YER' },
    { value: 'Aceite Ideal', data: 'ZMK' },
    { value: 'Aceite Vegetal', data: 'YER' },
    { value: 'Aceite Primor Premium', data: 'ZMK' },
    /**********************************************************/
    { value: 'Condimento Síbarita Amarillin', data: 'YER' },
    { value: 'Salasa de Ostion', data: 'ZMK' },
    { value: 'Salsa Alacena Aji Molido', data: 'YER' },
    { value: 'Salsa Alacena Rocoto', data: 'ZMK' },
    { value: 'Salsa de Tamarindo', data: 'YER' },
    { value: 'Slsati Maggy', data: 'ZMK' },
    { value: 'Salsati Maggy tuco', data: 'ZWD' },
    { value: 'Salsa LA Huancaina', data: 'ZWD' },
    /**************************************************/
    { value: 'Atun Real', data: 'ZWD' },
    { value: 'Filete de Atun A-1', data: 'ZWD' },
    { value: 'Atun Compass', data: 'ZWD' },
    { value: 'Grated de Atun Florida', data: 'ZWD' },
    { value: 'Sardina en Salsa de Tomate', data: 'ZWD' },
    { value: 'Tozos de Atun A-1', data: 'ZWD' },
    { value: 'Lomos de Atun Campomar', data: 'ZWD' },
    { value: 'Filete de Atun Campomar', data: 'ZWD' },
    /******************************************************/
    { value: 'Mayonesa Walibi', data: 'TWD' },
    { value: 'Mayonesa Walibi con Palta', data: 'TJS' },
    { value: 'Mayonesa Alacena Light', data: 'TZS' },
    { value: 'Mayonesa Alacena', data: 'THB' },
    /**************************************************/
    { value: 'Fideos Canuto', data: 'TWD' },
    { value: 'Fideos Linguine Molitalia', data: 'TJS' },
    { value: 'Fideos Tornillo', data: 'TZS' },
    { value: 'Spaghetti Don Vittorio', data: 'THB' },
    /****************************************************/
    { value: 'Mostaza Alacena', data: 'TWD' },
    { value: 'Mostaza Alpesa', data: 'TJS' },
    { value: 'Mostaza B&D', data: 'TZS' },
    { value: 'Mostaza B&D Sachet', data: 'THB' },
    { value: 'Mostaza Compass', data: 'TWD' },
    /**************************************************/
    { value: 'Menestra Costeño', data: 'TJS' },
    { value: 'Menestra Costeño Frejol', data: 'TZS' },
    { value: 'Menestra Costeño Trigo', data: 'THB' },
    /***************************************************/
    { value: 'Azucar Blanca Cartavio', data: 'TJS' },
    { value: 'Azucar rubia Cartavio', data: 'TZS' },
    { value: 'Azucar rubia Casa Grande', data: 'THB' },
    { value: 'Azucar Cartavio 5kg', data: 'TJS' },
    { value: 'Azucar Impalpable', data: 'TZS' },
    /*************************************************/
    { value: 'Arroz Costeño', data: 'THB' },
    { value: 'Arroz Hoja Redonda Extra', data: 'TJS' },
    /***********************************************************/
    { value: 'Arroz Costeño Integral', data: 'TZS' },
    /****************************************************/
    { value: 'Gaseosa de Lata', data: 'THB' },
    { value: 'Gaseosa Canada Dry', data: 'TJS' },
    { value: 'Gaseosa Coca Cola', data: 'TZS' },
    { value: 'Gaseosa Coca Cola  en Lata', data: 'THB' },
    { value: 'Gaseosa concordia', data: 'TJS' },
    { value: 'Gaseosa Crush', data: 'TZS' },
    { value: 'Gaseosa Guarana', data: 'THB' },
/**************************************************/
    { value: 'Agua Cielo', data: 'TZS' },
    { value: 'Agua de Mesa Cielo', data: 'THB' },
    { value: 'Agua de Mesa San Luis', data: 'TJS' },
    { value: 'Agua de Mesa San Mateo', data: 'TZS' },
    { value: 'Agua San Luis Fresa', data: 'THB' },
    { value: 'Agua san Luis Limón', data: 'TJS' },
    /************************************************/
    { value: 'Bebida Energizante Maltin Power', data: 'TZS' },
    { value: 'Bebida Energizante Red Bull', data: 'THB' },
    { value: 'Energizante Volt Blue', data: 'TZS' },
    /*****************************************************/
    { value: 'Nutrican Perro Adulto', data: 'THB' },
    { value: 'Alim. Ricocan Cachorros', data: 'TZS' },
    { value: 'Alim. Pedrigree Razas Peq.', data: 'THB' },
    { value: 'Dog Chow Cena Carne Adulto', data: 'TZS' },
    { value: 'Alim. Gato Whiskas Adulto', data: 'THB' },
    { value: 'Alim. Perro Mimaskot', data: 'TZS' },
    { value: 'Alim. Perro Dog Chow', data: 'THB' },
    /**********************************************************/
    { value: 'Paño Esponja Pack', data: 'TZS' },
    { value: 'Paños Yes 6 UND', data: 'THB' },
    { value: 'Paños Virutex', data: 'TZS' },
    { value: 'Paños Yes', data: 'THB' },
    { value: 'Esponja Scotch Brite', data: 'THB' },
    /**********************************************************/
    { value: 'Escoba Clorinda', data: 'TZS' },
    { value: 'Escoba Dkasa', data: 'THB' },
    { value: 'Escoba Esco-Bestia', data: 'TZS' },
    { value: 'Escoba Virutex', data: 'THB' },
    { value: 'Recogedor de Basura Hude', data: 'THB' },
    { value: 'Porta Escoba Fuller Pint 4Ganchos', data: 'THB' },
    /*********************************************************/
    { value: 'Esponjas Scotch Brite', data: 'TZS' },
    { value: 'Esponja Negra Kiwi', data: 'THB' },
    { value: 'Esponja Verde Virutex', data: 'TZS' },
    /******************************************************/
    { value: 'Sevilletas Elite Cortada', data: 'THB' },
    { value: 'Servilletas elite Dobladas', data: 'THB' },
    { value: 'Servilletas Scott', data: 'TZS' },
    /*********************************************************/
    { value: 'Papel Toalla Elite', data: 'THB' },
    { value: 'Papel Toalla Nova', data: 'THB' },
    { value: 'Papel toalla Elite Ultra', data: 'TZS' },
    { value: 'Papel toalla elite Mega Rolla', data: 'THB' },
    { value: 'Papel toalla Scott', data: 'THB' },
    /****************************************************/
    { value: 'Pan Bimbo', data: 'TZS' },
    { value: 'Pan Bimbo hot Dog', data: 'THB' },
    { value: 'Pan Bimbo Integral', data: 'THB' },
    { value: 'Pan Bimbo Pita', data: 'TZS' },
    { value: 'Pan Pyc Blanco', data: 'THB' },
    /***********************************************/
    { value: 'Mantequilla Gloria', data: 'THB' },
    { value: 'Mantequilla la Danesa', data: 'TZS' },
    { value: 'Mantequilla la Dorina Pote', data: 'THB' },
    { value: 'Mantequilla Laive sin Sal', data: 'THB' },
    { value: 'Mantequilla Gloria sin Sal', data: 'TZS' },
    /****************************************************/
     { value: 'Queso Bonle Pausterizado', data: 'TZS' },
    { value: 'Queso Crema Gloria Barra', data: 'THB' },
    { value: 'Queso Edam Bonle', data: 'TZS' },
    { value: 'Queso Fundido Laive', data: 'THB' },
    { value: 'Recogedor de Basura Hude', data: 'THB' },
    { value: 'Queso Gloria Bonle', data: 'THB' },
     { value: 'Queso Parmesano', data: 'TZS' },
    { value: 'Queso Laive Cream Cheese', data: 'THB' },
    { value: 'Queso Laive Edam', data: 'TZS' },
    { value: 'Queso Laive Jamon en Crema', data: 'THB' },
    /**********************************************************/
    { value: 'Leche Gloria', data: 'THB' },
    { value: 'Leche Gloria Evaporada Light', data: 'THB' },
    { value: 'Leche Gloria Sin Lactosa', data: 'TZS' },
    { value: 'Leche Gloria Niños DHA', data: 'THB' },
    { value: 'Leche Chocolatada Gloria', data: 'TZS' },
    { value: 'Leche Ideal Amanecer', data: 'THB' },
    { value: 'Leche Ideal Light', data: 'THB' },
    { value: 'Leche Laive', data: 'THB' },
    { value: 'Leche Pura Vida en Bolsa', data: 'THB' },
    { value: 'Leche Nestle NAN Bebes 2', data: 'TZS' },
    { value: 'Leche Nestle NAN Niños 3', data: 'THB' },
    { value: 'Leche en Bolsa Gloria', data: 'THB' },
    { value: 'Leche en Bolsa Laive', data: 'THB' },
    { value: 'Leche en Bolsa Soy Vida', data: 'THB' },
    /********************************************************/
    { value: 'Pan de Molde Maby', data: 'THB' },
    { value: 'Pan Maby', data: 'THB' },
    { value: 'Tostadas Integrales Maby', data: 'THB' },
    { value: 'Kekitos Maby', data: 'TZS' },
    { value: 'Chancay Maby', data: 'THB' },
    { value: 'Pan Integral Maby', data: 'THB' },
    { value: 'Varidad de Tortas y Postres', data: 'THB' },
    { value: 'Panetón Maby', data: 'THB' },

  ];
  
 // setup autocomplete function pulling from currencies[] array
  $('#autocomplete').autocomplete({
    lookup: currencies,
    onSelect: function (suggestion) {
 var thehtml =  suggestion.value;

      if (thehtml=="Ayudin" || thehtml=="Lava" || thehtml=="Lavavajillas"){ 

           var url = "categorias/utiles_limpieza/lava_vajillas/lava_vajillas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }


     if (thehtml=="Desinfectantes" || thehtml=="Desinfectante Harpic" || thehtml=="Desinfectante Poe" || thehtml=="Pino Sol" || thehtml=="Pato Tanque"){ 

           var url = "categorias/utiles_limpieza/desinfectantes/desinfectantes.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }

   
     if (thehtml=="Cera Limpiadora" || thehtml=="Cera Autobrillante" || thehtml=="Cera al Agua" || thehtml=="Cera para Muebles" || thehtml=="cera para Auto" || thehtml=="Cera Balde"){ 

           var url = "categorias/utiles_limpieza/ceras/ceras.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }

   if (thehtml=="Ambientador Poe" || thehtml=="Ambientadores Glade" || thehtml=="Ambientadores Johnson Glade" || thehtml=="Ambientadores Dkasa"){ 

           var url = "categorias/utiles_limpieza/ambientadores/ambientadores.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }


  
     if (thehtml=="Insecticidas" || thehtml=="Diclotrin" || thehtml=="Insecticida Baygon" || thehtml=="Insecticida Raid" || thehtml=="Insecticida Sapolio" || thehtml=="Insecticida Plop" || thehtml=="Insecticida Sapolio" || thehtml=="Insecticida Vape Pastilla"){ 

           var url = "categorias/utiles_limpieza/insecticidas/insecticidas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }

     if (thehtml=="Detergente Bolivar" || thehtml=="Detergente Ace" || thehtml=="Detergente Ariel" || thehtml=="Detergente Magia Blanca" || thehtml=="Detergente Ariel" || thehtml=="Detergente Marsella" || thehtml=="Detergente Liquido" || thehtml=="Detergente Opal" || thehtml=="Detergente Amor"){ 

           var url = "categorias/utiles_limpieza/detergente/detergente.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }

   
     if (thehtml=="Suavizantes" || thehtml=="Suavizante Amor" || thehtml=="Suavizantes Bolivar" || thehtml=="Suavizantes Suavitel" || thehtml=="Suavizante para Ropa"){ 

           var url = "categorias/utiles_limpieza/suavizantes/suavizantes.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }


     if (thehtml=="Shampoos" || thehtml=="Shampoo Elvive" || thehtml=="Shampoo Ammens" || thehtml=="Shampoos Pantene" || thehtml=="Shampoo Bio Expert" || thehtml=="Shampoo Clear" || thehtml=="Shampoo Dove" || thehtml=="Shampoo Ego" || thehtml=="Shampoo H&S" || thehtml=="Shampoo Vitane" || thehtml=="Shampoo Pert" || thehtml=="Shampoo Sedal" || thehtml=="Shampoos Konzil"){ 

           var url = "categorias/utiles_limpieza/shampoo/shampoo.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }

    /********************************************************************************************/
     if (thehtml=="Crema para peinar Sedal" || thehtml=="Creama para peinar Pantene" || thehtml=="Crema para peinar H&S" || thehtml=="Crema para peinar Savital" || thehtml=="Crema para peinar Elvive" || thehtml=="Crema para peinar Konzil" || thehtml=="Crema para peinar Muss Frizz"){ 

           var url = "categorias/utiles_aseo/crema_peinar/crema_peinar.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }


    

     if (thehtml=="Acondicionador Vitane" || thehtml=="Acondicionador Johnson" || thehtml=="Acondicionador Elvive" || thehtml=="Acondicionador Sedal" || thehtml=="Acondicionador Pantene" || thehtml=="Acondicionador Konzil" || thehtml=="Acondicionador Bonawell" || thehtml=="Acondicionador Bio Expert"){ 

           var url = "categorias/utiles_aseo/acondicionador/acondicionador.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }
    /******************************************************************************************/


     if (thehtml=="Talco Johnson Baby" || thehtml=="Talco Johnson Baby" || thehtml=="Pañitos Humedos Pampers" || thehtml=="Repelente Bacterión Baby"){ 

           var url = "categorias/utiles_aseo/utiles_aseo_bebe/utiles_aseo_bebe.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }


     if (thehtml=="Comote Natuchips" || thehtml=="Frito Lays Camote"){ 

           var url = "categorias/bocaditos/camotitos/camotitos.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }

 /******************************************************************************/

     if (thehtml=="chifles Ariik" || thehtml=="Chifles Crickets"){ 

           var url = "categorias/bocaditos/chifles/chifles.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }

  
     if (thehtml=="Chocolates Nueces Pasas" || thehtml=="Chocolates Linaje Sentimientos" || thehtml=="Chocolates de Costa Tuyo" || thehtml=="Chocolates Huevito Princesa" || thehtml=="Chocolate Valle" || thehtml=="Chocolates Sublime"){ 

           var url = "categorias/bocaditos/chocolates/chocolates.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }

/*******************************************************************************/
 
     if (thehtml=="Papas Fritas Pringles" || thehtml=="Papas Lays Clasica" || thehtml=="Papas Pringles Cebolla" || 
        thehtml=="Papas al Hilo" || thehtml=="Papas Pringles Original" || thehtml=="Piques snack"){ 

           var url = "categorias/bocaditos/papitas/papitas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }


     if (thehtml=="Papel Higienico Elite Ultra" || thehtml=="Papel Higienico Suave" || thehtml=="Papel Higienico Doble Hoja"){ 

           var url = "categorias/aseo_personal/papel_higienico/papel_higienico.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }


/********************************************************************************/
   if (thehtml=="Protector Cofree MultiFlexi" || thehtml=="Protector Nosotras Diarios" || thehtml=="Toallas Higienicas Nosotras Protectores"){ 

           var url = "categorias/aseo_personal/protectores/protectores.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
    }

       if (thehtml=="Toallas Higienicas Nosotras" || thehtml=="Toallas Higienicas stayfree" || thehtml=="Toallas Higienicas Always"){ 

           var url = "categorias/aseo_personal/toallas_higienicas/toallas_higienicas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
        /*******************************//*****************************************************/
         if (thehtml=="Pañuelos Humedos Desechables"){ 

           var url = "categorias/aseo_personal/pañitos_humedos_desechable/pañitos_humedos_desechable.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

       /*  if (thehtml=="Gelatina Leal" || thehtml=="Gelatina Royal" || thehtml=="Gelatina Universal" || thehtml=="Gelatina Univerl Diet"){ 

           var url = "categorias/reposteria/gelatinas/gelatinas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }*/

        /************************************/////***********************************/
        if (thehtml=="Gelatina Leal" || thehtml=="Gelatina Royal" || thehtml=="Gelatina Universal" || thehtml=="Gelatina Univerl Diet"){ 

           var url = "categorias/reposteria/gelatinas/gelatinas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

        if (thehtml=="Mermelada A-1" || thehtml=="Mermelada Compass" || thehtml=="Mermelada Fanny" || thehtml=="Mermelada Fanny Deli" || thehtml=="Mermelada A-1 Fresa"){ 

           var url = "categorias/reposteria/mermeladas/mermeladas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }


/**********************************************************************/
          if (thehtml=="Crema de Leche Gloria" || thehtml=="Crema de Leche Nestle" || thehtml=="Leche Condensada Gloria"){ 

           var url = "categorias/reposteria/leche_condensada/leche_condensada.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

          if (thehtml=="Caramelo Ambrosoli" || thehtml=="Caramelo Colombina" || thehtml=="Caramelo Tic Tac" || thehtml=="Caramelo Halls" || thehtml=="Caramelo Sayon" || thehtml=="Caramelos Mentos" || thehtml=="Caramelo winters"){ 

           var url = "categorias/golosinas/caramelos/caramelos.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
/******************************************************************************************************/


 if (thehtml=="Galletas Costa de Agua" || thehtml=="Galleta costa Gran Cereal" || thehtml=="Galleta Field" || thehtml=="Galletas Chinchin" || thehtml=="Galletas Costa Caritas" || thehtml=="Galletas Colombina" || thehtml=="Galletas Costa Frac" || thehtml=="Galletas Waffer Nik" || thehtml=="Galletas Ducales" || thehtml=="Galletas Cream Crackers" || thehtml=="Galletas Rellenitas" || thehtml=="Galletas Morochas"){ 

           var url = "categorias/golosinas/galletas/galletas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

         if (thehtml=="Galletas Costa Integrales" || thehtml=="Galletas Crisinos" || thehtml=="Galletas Mana" || thehtml=="Galletas Mana Dieteticas"){ 

           var url = "categorias/golosinas/galletas_integrales/galletas_integrales.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

/******************************************************************************************************/

 if (thehtml=="Galletas Wafer" || thehtml=="Galletas Nik" || thehtml=="Tanzanian shilling" || thehtml=="Galletas Tuyo"){ 

           var url = "categorias/golosinas/wafer/wafer.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }



         if (thehtml=="Yogurt Gloria" || thehtml=="Yogurt DanLac" || thehtml=="Yogurt Gloria Actibio" || thehtml=="Yogurt Gloria BattiShake"){ 

           var url = "categorias/lacteos_cereales/yogurt/yogurt.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

/*******************************************************************************************/

if (thehtml=="Cereal Angel" || thehtml=="Cereal Cornk Flakes" || thehtml=="Cereal Maiz" || thehtml=="Cereal Automico" ||
 thehtml=="Cereal Gloria" || thehtml=="Cereal en Caja"){ 

           var url = "categorias/lacteos_cereales/cereales/cereales.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }



         if (thehtml=="Jugo Aquarius" || thehtml=="Jugo Aruba" || thehtml=="Jugo Citrus" || thehtml=="Jugo Cifrut Tropical" || thehtml=="Jugo Aruba Durazno"){ 

           var url = "categorias/lacteos_cereales/jugos/jugos.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
/****************************************************************************/

         if (thehtml=="Bebida Rehidratante Sporade" || thehtml=="Rehidratante Sporade Blueberry"){ 

           var url = "categorias/bebidas/rehidratantes/rehidratantes.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

         if (thehtml=="Aceite A-1" || thehtml=="Aceite Capri" || thehtml=="Aceite Costeño" || thehtml=="Aceite de Canola" || thehtml=="Aceite Primor" || thehtml=="Aceite Ideal" || thehtml=="Aceite Vegetal" || thehtml=="Aceite Primor Premium" ){ 

           var url = "categorias/productos_cocina/aceite/aceite.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

        /*********************************************************************************************/

if (thehtml=="Condimento Síbarita Amarillin" || thehtml=="Salsa de Ostion" || thehtml=="Salsa Alacena Aji Molido" || thehtml=="Salsa Alacena Rocoto" || thehtml=="Salsa de Tamarindo" || thehtml=="Salsati Maggy" || thehtml=="Salsati Maggy tuco" || thehtml=="Salsa LA Huancaina"){ 

           var url = "categorias/productos_cocina/salsas/salsas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

 if (thehtml=="Atun Real" || thehtml=="Filete de Atun A-1" || thehtml=="Atun Compass" || thehtml=="Grated de Atun Florida" || thehtml=="Sardina en Salsa de Tomate" || thehtml=="Tozos de Atun A-1" || thehtml=="Filete de Atun Campomar" || thehtml=="Filete de Atun Campomar" ){ 

           var url = "categorias/productos_cocina/atun/atun.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
        /***************************************************************************************/

   
        if (thehtml=="Mayonesa Walibi" || thehtml=="Mayonesa Walibi con Palta" || thehtml=="Mayonesa Alacena Light" || thehtml=="Mayonesa Alacena"){ 

           var url = "categorias/productos_cocina/mayonesa/mayonesa.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

 if (thehtml=="Fideos Canuto" || thehtml=="Fideos Linguine Molitalia" || thehtml=="Fideos Tornillo" || thehtml=="Spaghetti Don Vittorio"){ 

           var url = "categorias/productos_cocina/fideos/fideos.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
if (thehtml=="Mostaza Alacena" || thehtml=="Mostaza Alpesa" || thehtml=="Mostaza B&D" || thehtml=="Mostaza B&D Sachet" || thehtml=="Mostaza Compass"){ 

           var url = "categorias/productos_cocina/mostaza/mostaza.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
 
/********************************************************************************************/

       
        if (thehtml=="Menestra Costeño" || thehtml=="Menestra Costeño Frejol" || thehtml=="Menestra Costeño Trigo"){ 

           var url = "categorias/abarrotes/menestras/menestras.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

 if (thehtml=="Azucar Blanca Cartavio" || thehtml=="Azucar rubia Cartavio" || thehtml=="Azucar rubia Casa Grande" || thehtml=="Azucar Cartavio 5kg" || thehtml=="Azucar Impalpable"){ 

           var url = "categorias/abarrotes/azucar/azucar.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }


if (thehtml=="Arroz Costeño" || thehtml=="Arroz Hoja Redonda Extra"){ 

           var url = "categorias/abarrotes/arroz/arroz.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
        
  
/**************************************************/

        if (thehtml=="Arroz Costeño Integral"){ 

           var url = "categorias/abarrotes/arroz_integral/arroz_integral.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

        if (thehtml=="Gaseosa de Lata" || thehtml=="Gaseosa Canada Dry" || thehtml=="Gaseosa Coca Cola"  
            || thehtml=="Gaseosa Coca Cola en Lata" || thehtml=="Gaseosa concordia" || thehtml=="Gaseosa Crush" || thehtml=="Gaseosa Guarana"){ 

           var url = "categorias/bebidas/gaseosas/gaseosas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

        if (thehtml=="Agua Cielo" || thehtml=="Agua de Mesa Cielo" || thehtml=="Agua de Mesa Cielo" || thehtml=="Agua de Mesa San Luis" || thehtml=="Agua de Mesa San Mateo" || thehtml=="Agua San Luis Fresa" || thehtml=="Agua san Luis Limón"){ 

           var url = "categorias/bebidas/aguas/aguas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
/*********************************************************************************/

   if (thehtml=="Bebida Energizante Maltin Power" || thehtml=="Bebida Energizante Red Bull" || thehtml=="Energizante Volt Blue"){ 

           var url = "categorias/bebidas/energizantes/energizantes.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

           if (thehtml=="Nutrican Perro Adulto" || thehtml=="Alim. Ricocan Cachorros" || thehtml=="Alim. Pedrigree Razas Peq." || thehtml=="Dog Chow Cena Carne Adulto" || thehtml=="Alim. Gato Whiskas Adulto" || thehtml=="Alim. Perro Mimaskot" || thehtml=="Alim. Perro Dog Chow"){ 

           var url = "categorias/animales/alimentos_gatos_perros/alimentos_gatos_perros.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }


           if (thehtml=="Paño Esponja Pack" || thehtml=="Paños Yes 6 UND" || thehtml=="Paños Virutex" || thehtml=="Paños Yes" || thehtml=="Esponja Scotch Brite"){ 

           var url = "categorias/material_aseo/paños/paños.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
    
   /*****************************************************************************************/


 if (thehtml=="Escoba Clorinda" || thehtml=="Escoba Dkasa" || thehtml=="Escoba Virutex" || thehtml=="Recogedor de Basura Hude" || thehtml=="Porta Escoba Fuller Pint 4Ganchos"){ 

           var url = "categorias/material_aseo/escobas/escobas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
    

     if (thehtml=="Esponjas Scotch Brite" || thehtml=="Esponja Negra Kiwi" || thehtml=="Esponja Verde Virutex"){ 

           var url = "categorias/material_aseo/esponjas/esponjas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
    

     if (thehtml=="Sevilletas Elite Cortada" || thehtml=="Servilletas elite Dobladas" || thehtml=="Servilletas Scott"){ 

           var url = "categorias/material_aseo/servilletas/servilletas.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

/**********************************************************************************************/

 if (thehtml=="Papel Toalla Elite" || thehtml=="Papel Toalla Nova" || thehtml=="Papel toalla Elite Ultra" || thehtml=="Papel toalla elite Mega Rolla" || thehtml=="Papel toalla Scott"){ 

           var url = "categorias/material_aseo/papel_toalla/papel_toalla.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

         if (thehtml=="Pan Bimbo" || thehtml=="Pan Bimbo hot Dog" || thehtml=="Pan Bimbo Integral" || thehtml=="Pan Bimbo Pita" || thehtml=="Pan Pyc Blanco" ){ 

           var url = "categorias/panaderia/pan/pan.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }

         if (thehtml=="Mantequilla Gloria" || thehtml=="Mantequilla la Danesa" || thehtml=="Mantequilla la Dorina Pote" || thehtml=="Mantequilla Laive sin Sal" || thehtml=="Mantequilla Gloria sin Sal"){ 

           var url = "categorias/panaderia/mantequilla/mantequilla.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
/*******************************************************************************************************/



if (thehtml=="Queso Bonle Pausterizado" || thehtml=="Queso Crema Gloria Barra" || thehtml=="Queso Edam Bonle" || thehtml=="Queso Fundido Laive" || thehtml=="Queso Gloria Bonle" || thehtml=="Queso Parmesano" || thehtml=="Queso Laive Cream Cheese" || thehtml=="Queso Laive Edam" || thehtml=="Queso Laive Jamon en Crema"){ 

           var url = "categorias/panaderia/queso/queso.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
 

        if (thehtml=="Leche Gloria" || thehtml=="Leche Gloria Evaporada Light" || thehtml=="Leche Gloria Sin Lactosa" || thehtml=="Leche Gloria Niños DHA" || thehtml=="Leche Chocolatada Gloria" || thehtml=="Leche Ideal Amanecer" || thehtml=="Leche Ideal Light" || thehtml=="Leche Laive" || thehtml=="Leche Pura Vida en Bolsa" || thehtml=="Leche Nestle NAN Bebes 2" || thehtml=="Leche Nestle NAN Niños 3" || thehtml=="Leche en Bolsa Gloria" || thehtml=="Leche en Bolsa Laive" || thehtml=="Leche en Bolsa Soy Vida"){ 

           var url = "categorias/panaderia/leche/leche_bolsa.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }
 

        if (thehtml=="Pan de Molde Maby" || thehtml=="Pan Maby" || thehtml=="Tostadas Integrales Maby" || thehtml=="Kekitos Maby" || thehtml=="Chancay Maby" || thehtml=="Pan Integral Maby" || thehtml=="Varidad de Tortas y Postres" || thehtml=="Panetón Maby" ){ 

           var url = "menu/campaña_nav/campaña_nav.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {},
                        success: function (datos) {
                            $('#contenedor_principal').html(datos);
                        }
                    });
        }


        
}
    
  });
  

});
