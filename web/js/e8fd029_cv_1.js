        $(function() {
            var availableTags = [
                "Semlo",
                "Semlalli",
                "Raph",
                "Benmessaoud",
                "Zizou",
                "Ziyad",
                "Amanzou",
                "Amine"
            ];
	
            var tailleForm = {
                width: 900,
                height: 600
                //minWidth: 600,
                //minHeight: 600,
                //maxWidth: 600,
                //maxHeight: 600
            };
            $( "#tags" ).autocomplete({
                source: availableTags
            });
            $( "#glissage" ).accordion();
	            
		$("#forms1").hide();
		$("#forms1").click(function()
		{
			$("#forms1").show('slow');
		});        
                $("#valider1").click(function()
		{
			$("#forms1").hide('slow');
		})
            
		$("#forms2").hide();
		$("#editer2").click(function()
		{
			$("#forms2").show('slow');
		});        
                $("#valider2").click(function()
		{
			$("#forms2").hide('slow');
		})
                
		$("#forms3").hide();
		$("#editer3").click(function()
		{
			$("#forms3").show('slow');
		});        
                $("#valider3").click(function()
		{
			$("#forms3").hide('slow');
		})

		$("#forms4").hide();
		$("#editer4").click(function()
		{
			$("#forms4").show('slow');
		});        
                $("#valider4").click(function()
		{
			$("#forms4").hide('slow');
		})
    /*        $( "#forms" ).dialog({
                autoOpen: false,
                show: {
                    effect: "highlight",
                    duration: 1000
                },
                hide: {
                    effect: "pulsate",
                    duration: 1000
                }
            });
                
            $( "#editer" ).click(function() {
                $( "#forms" ).dialog( "open" );
            });
                
            $("#forms").dialog(tailleForm);
                /*
            //A propos de moi
            $( "apdm" ).dialog({
                autoOpen: false,
                show: {
                    effect: "highlight",
                    duration: 1000
                },
                hide: {
                    effect: "pulsate",
                    duration: 1000
                }
            });
                
            $( "#editerapdm" ).click(function() {
                $( "#apdm" ).dialog( "open" );
            });
                
            $("#apdm").dialog(tailleForm);
                
            //compétence
            $( "competence" ).dialog({
                autoOpen: false,
                show: {
                    effect: "highlight",
                    duration: 1000
                },
                hide: {
                    effect: "pulsate",
                    duration: 1000
                }
            });
                
            $( "#editercomp" ).click(function() {
                $( "#competence" ).dialog( "open" );
            });
                
            $("#competence").dialog(tailleForm);
                
            //experiece
            $( "exp" ).dialog({
                autoOpen: false,
                show: {
                    effect: "highlight",
                    duration: 1000
                },
                hide: {
                    effect: "pulsate",
                    duration: 1000
                }
            });
                
            $( "#editerexp" ).click(function() {
                $( "#exp" ).dialog( "open" );
            });
                
            $("#exp").dialog(tailleForm);
				*/
				
        });