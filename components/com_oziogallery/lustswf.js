/**
* lustSwf, crea l'object del flash con un detect del player
* @version 1.0
* @package
* @subpackage
* @author Luca Strazzullo, lustForDesign
* @copyright (C) Luca Strazzullo, lustForDesign, www.lucastrazzullo.it
* @license Limited  http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @final 1.0 RC1
*/



var lustswf = 

{

start : function( path , idobject , width , height , version , bgcolor )

	{
	
	// object parameters
	// -> attributes
	// -> params
	// -> variables
	
	lustswf.objAttributes 	= new Array();
	lustswf.objParams 		= new Object();
	lustswf.objVariables 	= new Object();
	
	// objects
	
	lustswf.pversion = new Object();
			
	// determino l'altezza
	
	height = ( height != '100%' ? height : lustswf.getHeight() );
	
	// determino la versione del player
	
	lustswf.detPlayerVersion();
	
	// aggiungo gli attributi dell'object
			
	lustswf.setAttribute( 1 , path 		);
	lustswf.setAttribute( 2 , idobject 	);
	lustswf.setAttribute( 3 , width 	);
	lustswf.setAttribute( 4 , height	);
	lustswf.setAttribute( 5 , version 	);
	
	// aggiungo i parametri di default
	
	if ( bgcolor ) lustswf.addParam('bgcolor', bgcolor);
			
	},
	
write : function( targetid )

	{
	
	// id dell'oggetto in cui sarà scritto l'swf
	lustswf.setAttribute( 0 , targetid );
	
	// valido la versione installata con la versione richiesta
	var detected = ( lustswf.getAttribute(5) != null ? lustswf.valPlayerVersion( lustswf.getAttribute(5) ) : true );
	
	if ( detected )
	
		{
		
		var xhtml = lustswf.getSwfXhtml();
		
		}
		
	else
	
		{
		
		// l'attributo 20 è l'xhtml da mostrare nel caso in cui
		// non c'è il player installato o la versione è errata.
		var xhtml = ( lustswf.getAttribute( 20 ) ? lustswf.getAttribute( 20 ) : lustswf.getNoSwfXhtml() );
		
		}
		
	var n = ( typeof targetid == "string" ) ? document.getElementById( targetid ) : divDest;
		n.innerHTML = xhtml;
			
	},
	
/**
 * --------------------------- *
 * ---- metodi per l'xhtml --- *
 * --------------------------- *
 */

getSwfXhtml : function()

	{
			
	if ( navigator.plugins && navigator.mimeTypes && navigator.mimeTypes.length )
	
		{
		
		xhtml = lustswf.getDefaultXhtmlSwf();
		
		}
		
	else
	
		{
		
		xhtml = lustswf.getExplorerXhtmlSwf();
		
		}
	
	return xhtml;
	
	},
	
getDefaultXhtmlSwf : function()

	{
	
	xhtml  = '';
	
	xhtml += '<embed ';
	xhtml += 'type = "application/x-shockwave-flash" ';
	xhtml += 'src = "' 	 + lustswf.getAttribute(1) + '" ';
	xhtml += 'width = "' + lustswf.getAttribute(3) + '" ';
	xhtml += 'height = "'+ lustswf.getAttribute(4) + '" ';
	xhtml += 'id = "' 	 + lustswf.getAttribute(2) + '" ';
	xhtml += 'name = "'  + lustswf.getAttribute(2) + '" ';
	
	// parametri dell'swf
				
	for ( var key in lustswf.getParams() )
	
		{ xhtml += key + '="' + lustswf.getParams()[key] +'" '; }
	
	
	// variabili dell'swf
	
	var variables = "";
	
	for ( var key in lustswf.getVariables() )
	
		{
		
		variables += key;
		variables += "=";
		variables += lustswf.getVariables()[key];
		variables += "&";
		
		}
	
	if ( variables != "" )
		
		xhtml += 'flashvars="'+variables+'"';
					
		
	xhtml += '/>';
	
	return xhtml;
	
	},

getExplorerXhtmlSwf : function()

	{
	
	xhtml  = '';
	
	xhtml += '<object ';
	xhtml += 'type = "application/x-shockwave-flash" ';
	xhtml += 'id = "' 	 + lustswf.getAttribute(2) + '" ';
	xhtml += 'width = "' + lustswf.getAttribute(3) + '" ';
	xhtml += 'height = "'+ lustswf.getAttribute(4) + '" ';
	xhtml += '> ';
	
	xhtml += '<param ';
	xhtml += 'name="movie" ';
	xhtml += 'value="' + lustswf.getAttribute(1)+ '" ';
	
	// parametri dell'swf
				
	for ( var key in lustswf.getParams() )
	
		{ xhtml += '<param name="' + key + '" value="' + lustswf.getParams()[key] + '" />'; }

	// variabili dell'swf
	
	var variables = "";
	
	for ( var key in lustswf.getVariables() )
	
		{
		
		variables += key;
		variables += "=";
		variables += lustswf.getVariables()[key];
		variables += "&";
		
		}
	
	if ( variables != "" )
		
		xhtml += '<param name="flashvars" value="' + variables + '" />';
			
	xhtml += '</object>';
		
	return xhtml;	
	
	},
	
getNoSwfXhtml : function()

	{
	
	var xhtml =  '<p>';
		xhtml += 'Abbiamo riscontrato che il plug-in <strong>adobe flash player</strong> ';
		xhtml += 'versione: ' + lustswf.getAttribute(5) + '<br />';
		xhtml += 'non &egrave; installato sul tuo computer <br /><br />';
		xhtml += '<a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" class="link">';
		xhtml += 'Scarica il flash player ' + lustswf.getAttribute(5) + '</a><br />';
		xhtml += 'per visualizzare i contenuti.';
		xhtml += '</p>';
	
	return xhtml;
	
	},

/**
 * -------------------------------------------------------------- *
 * ---------------------- detect del player --------------------- *
 * detPlayerVersion --> ritorna la versione del player installata *
 * valPlayerVersion --> valida la versione richiesta			  *
 * -------------------------------------------------------------- *
 */

detPlayerVersion : function()

	{
	
	lustswf.setPlayerVersion([0,0,0]);
	
	if( navigator.plugins&&navigator.mimeTypes.length )
	
		{
		
		var x = navigator.plugins["Shockwave Flash"];
		
		if (x && x.description)
		
			{ lustswf.setPlayerVersion( x.description.replace(/([a-zA-Z]|\s)+/,"").replace(/(\s+r|\s+b[0-9]+)/,".").split(".")); }
		
		}
		
	else
	
		{
		
		try
		
			{ var axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7"); }
			
		catch( e )
		
			{
			
			try
			
				{
				
				var axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
				
				lustswf.setPlayerVersion([6,0,21]);
				
				axo.AllowScriptAccess = "always";
				
				}
				
			catch( e )
				
				{
				
				if( lustswf.pversion['maj'] == 6 )
					
					{ return lustswf.getPlayerVersion(); }
					
				}
				
			try
			
				{ axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash"); }
				
			catch( e ) 
			
				{ }
				
			}
			
		if( axo != null )
		
			{ lustswf.setPlayerVersion( axo.GetVariable("$version").split(" ")[1].split(",") ); }
			
		}
			
	return lustswf.getPlayerVersion();
	
	},
	
valPlayerVersion : function( vdesiderate )

	{
	
	var vdesideratemaj = vdesiderate.split('.')[0] !=null ? parseInt( vdesiderate.split('.')[0] ) : 0 ;
	var vdesideratemin = vdesiderate.split('.')[1] !=null ? parseInt( vdesiderate.split('.')[1] ) : 0 ;
	var vdesideraterev = vdesiderate.split('.')[2] !=null ? parseInt( vdesiderate.split('.')[2] ) : 0 ;
	
	if( lustswf.pversion['maj'] < vdesideratemaj ) { return false; }
	if( lustswf.pversion['maj'] > vdesideratemaj ) { return true;  }
	if( lustswf.pversion['min'] < vdesideratemin ) { return false; }
	if( lustswf.pversion['min'] > vdesideratemin ) { return true;  }
	if( lustswf.pversion['rev'] < vdesideraterev ) { return false; }
	
	return true;
	
	},

setPlayerVersion : function( version )

	{
	
	lustswf.pversion['maj'] = version[0] !=null ? parseInt( version[0] ) : 0 ;
	lustswf.pversion['min'] = version[1] !=null ? parseInt( version[1] ) : 0 ;
	lustswf.pversion['rev'] = version[2] !=null ? parseInt( version[2] ) : 0 ;
	
	},
	
getPlayerVersion : function()

	{
	
	var version = lustswf.pversion['maj'] + '.' + lustswf.pversion['min'] + '.' + lustswf.pversion['rev'];
	
	return version;
	
	},
	
/**
 * ------------------------ *
 * ---- metodi pubblici --- *
 * ------------------------ *
 */
 
// testo da visualizzare se non c'è il player

setNoSwfText : function( text )

	{
	
	lustswf.setAttribute( 20 , text );
	
	},
	
// metodi per il settaggio degli attributi dell'object
	
setAttribute : function( id , value )

	{
	
	lustswf.getAttributes()[id] = value ;
	
	},
	
getAttribute : function( id )

	{
	
	return lustswf.getAttributes()[id];
	
	},

getAttributes : function()

	{
	
	return lustswf.objAttributes;
	
	},
	
// metodi per il settaggio dei parametri dell'object
	
addParam : function( id , value )

	{
	
	lustswf.getParams()[id] = value ;
	
	},
	
getParam : function( id )

	{
	
	return lustswf.getParams()[id];
	
	},
	
getParams : function()

	{
	
	return lustswf.objParams;
	
	},
	
	
// metodi per il settaggio delle variabili dell'object
	
addVariable : function( id , value )

	{
	
	lustswf.getVariables()[id] = value ;
	
	},
	
getVariable : function( id )

	{
	
	return lustswf.getVariables()[id]
	
	},
	
getVariables : function()

	{
	
	return lustswf.objVariables;
	
	},
	
/**
 * ---------------------------- *
 * ---- metodi per lo stage --- *
 * ---------------------------- *
 */
 
// calcolo dell'altezza dello stage

getHeight : function() 

	{
	
	var height = 0;
	
	if ( typeof(window.innerHeight) == 'number' ) 
	
		{ height = window.innerHeight; }
		
	else 
	
		{
		
		if ( document.documentElement && document.documentElement.clientHeight ) 
		
			{ height = document.documentElement.clientHeight; } 
			
		else 
		
			{
			
			if (document.body && document.body.clientHeight) 
			
				{ height = document.body.clientHeight; }
				
			}
		
		}
	
	return height;
	
	}

};