{% extends "layouts/default.php" %}

{% block title "Hugheswedding - Photo Share" %}

{% block content %}
    <div id="mulitplefileuploader">Add Photos</div>

    <script>
        var settings = {
            url: "/upload",
            method: "POST",
            allowedTypes:"jpg,png,gif",
            fileName: "fileUpload",
            multiple: true,
            onSuccess:function(files, data, xhr)
            {
            },
            onError: function(files, status, errMsg)
            {
            }
        };

        $("#mulitplefileuploader").uploadFile(settings);
    </script>
{% endblock %}
