$ ( document ) . ready ( function ( ) { 
				
				var page_hash = window . location . hash ,
					clean_hash = page_hash . replace( '#/' , '' ); 
				
				$('body').hide().fadeIn(100);
				$('#content').hide().delay(200).fadeIn(400);
				
				$ ( 'a' ) . each ( function ( ) {
					
					var $link = $ ( this ),
						href = $link . attr ( 'href' );
					
					if ( href.toLowerCase().indexOf("#") >=0 ) {
						
						$link . addClass ( 'internal' ) ;
						$link	. data ( { 'target' :  href , 'target_visible' : false } ) ;
								//. attr ( 'href' , '' );
						$ ( href ) .css ( { 'opacity' : 0 , 'display' : 'none'} );
					
					}		
					
				 } ) ;
				 
				 $ ( 'a.internal' ) . click ( function ( e ) { 
					
					var $link = $ ( this ) ,
						target = $link . data ( 'target' ) ;
					
					e.preventDefault ( ) ;
					
					if ( $link . data ( 'target_visible' ) ){
						
						$ ( target ) . animate ( { 'opacity' : 0 } , 500 , function () { 
								$ ( this ) .css ( { 'display' : 'none' } ) ;
							} ) ;
						$link . data ( 'target_visible' , false ) ;
						window . location.hash = '/' ;
						
					} else {
						
						var wait = setTimeout(function(){
								$ ( target ) . css ( { 'display' : 'block' } ) . animate ( { 'opacity' : 1 } , 500 ) ;
							}, 350);
						
						
						
						$ ( '#content' ) 	. children ( 'section, header' ) . not ( target ) 
											. animate ( { 'opacity' : 0 } , 300 , function () { 
												$ ( this ) . css ( { 'display' : 'none' } ) ;
											} ) ; 
											
						$ ( 'a.internal' ) . data ( 'target_visible' , false ) ;
						$link . data ( 'target_visible' , true ) ;
						window . location = target . replace('#' , '#/') ;
						
					}
					
				} );
				
				$ ( 'a[href="#' + clean_hash + '"]' ) . click ( ) ; 
			
			} ) ;
