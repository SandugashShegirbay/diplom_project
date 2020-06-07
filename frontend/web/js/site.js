$('.carousel').carousel();

var k = 0;
function showit(){
	k++;
	if(k % 2 == 1){
		$("#srtc").slideDown(400);
		$('#showinform').css('background','#cccccc96');
		$('#rotait').css('transform','rotate(180deg)');
		$('#rotait').css('transition','0.3s all')
	}else{
		$("#srtc").slideUp(400);
		$('#showinform').css('background','#fff');
		$('#rotait').css('transform','rotate(0deg)');
		$('#rotait').css('transition','0.3s all')
	}
}

function setselected(id){
	$.ajax({
        url: '/site/selected',
        type:'POST',
        data: {'id':id},
        success: function (){
        	$("#modelShow").modal('show');
        	setInterval(function(){
        		$("#modelShow").modal('hide');
        	},2000)
        },
        error: function(){
        }
    });
}