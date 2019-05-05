jQuery(document).ready(function ($) {

    $("#btn").on("click", function () {

        var myTarget = this.children[0].children[0].attributes[0];

        if (myTarget.nodeValue === "M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z") {
            myTarget.nodeValue = "M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z";
            $(".remove").removeClass("hidden-xs");
            $("#navContent").removeAttr("class");
        } else {
            myTarget.nodeValue = "M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z";
            $(".remove").addClass("hidden-xs");
            $("#navContent").removeAttr("class");
        }

    });

});