$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});

    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#wishfield" + next;
        var addRemove = "#wishfield" + (next);
        next = next + 1;

    var newIn = '<div class="form-group">\
        <label for="human" class="col-sm-2 control-label">Wish</label>\
        <div class="col-sm-10">\
            <input type="text" class="form-control" id="wish' + next + '" name="wish' + next + '" placeholder="Wish">\
        </div>\
    </div>\
    <div class="form-group">\
        <label for="human" class="col-sm-2 control-label">Duration</label>\
        <div class="col-sm-4">\
            <input type="text" class="form-control" id="duration1" name="duration1" placeholder="Duration">\
        </div>\
        <label for="human" class="col-sm-2 control-label">Amount</label>\
        <div class="col-sm-4">\
            <input type="text" class="form-control" id="amount1" name="amount1" placeholder="Amount">\
        </div>\
    </div>\
    <div class="form-group">\
        <label for="human" class="col-sm-2 control-label"></label>\
        <div class="col-sm-10">\
			<button id="b1" class="btn btn-primary btn-block add-more" type="button">+</button><br>\
        </div>\
    </div>'
alert(dummy);
        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
});
