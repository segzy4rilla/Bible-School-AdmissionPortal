!function (e) {
    "use strict";
    e("#example-form").children("div").steps({
        headerTag: "h3", bodyTag: "section", transitionEffect: "slideLeft", onFinished: function (e, i) {

            document.getElementById("example-form").submit()


        }
    });
    var i = e("#example-validation-form");
    i.val({
        errorPlacement: function (e, i) {
            i.before(e)
        }, rules: {confirm: {equalTo: "#password"}}
    }), i.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function (e, n, t) {
            return i.val({ignore: [":disabled", ":hidden"]}), i.val()
        },
        onFinishing: function (e, n) {
            return i.val({ignore: [":disabled"]}), i.val()
        },
        onFinished: function (e, i) {
            alert("Submitted formmm!")
        }
    }), e("#example-vertical-wizard").children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical",
        onFinished: function (e, i) {
            alert("Submitted formmm2!")
        }
    })
}(jQuery);