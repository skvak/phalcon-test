{% extends "layouts/main.volt" %}

{% block title %}
    Please register!
{% endblock %}

{% block content %}
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-2">
                    <p>
                        <a class="btn btn-primary btn-lg center-block"
                           href="{{ url("step1") }}" role="button">Register!
                        </a>

                    </p>
                </div>
                <div class="col-lg-5"></div>
            </div>
        </div>
    </div>
{% endblock %}

