var data;
        var len;
        var tracker;
        $(document).ready(function() {

            $.ajax({
                url: "update.php", //the page containing php script
                type: "GET", //request type,
                dataType: 'JSON',
                success: function(result) {
                    // Initially show 6 items 

                    data = result.reverse();
                    len = data.length;
                    tracker = len - 6;

                    console.log("AJAX Tracker is: " + tracker);
                                        //data.shift();
                    for (var i = len - 1; i >= 0; i--) {
                        updateUI(i);
                        if (i < tracker) {
                            $('div[class="col"][data-item-index="' + i + '"]').addClass("hidden").attr("hidden", "");
                        }
                    }
                    console.log(result);
                    console.log(data);
                }

            });
        });


        var interval = setInterval(() => {
            var remove = data.length - 1;
            $("div.col[data-item-index=" + remove + "]").remove();
            
            if (tracker != 0) {
                tracker--;
            }

            $('div.col[data-item-index="' + tracker + '"]').removeClass("hidden").removeAttr("hidden").hide().fadeIn(1000);

            console.log("Clear interval Tracker is: " + tracker);
            $(".queue").text("Remaining Queue : " + remove);
            console.log(remove);
            //$("div.col[data-item-index=" + remove + "]").remove();
            remove--;
            data.pop();
            
            if (data.length === 0) {
                clearInterval(interval);
            }
            console.log(data);
        }, 3000);



        function updateUI(i) {
            $("#items").append("\
                                <div class='col' data-item-index='" + i + "'>\
                                <div class='card text-center' style='width: 18rem;'>\
                                <img src='images/" + data[i]['image'] + "' class='card-img-top'>\
                                <div class='card-body'>\
                                <h5 class='card-title'>" + data[i]['title'] + "</h5>\
                                <p class='card-text'>" + data[i]['description'] + "</p>\
                                </div>\
                                </div>\
                                </div>\
                            ");
        }
