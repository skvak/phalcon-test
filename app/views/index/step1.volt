{% extends "layouts/main.volt" %}

{% block title %}
    Step 1
{% endblock %}

{% block content %}
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-2">
                    <p>{{ flashSession.output() }}</p>
                    {{ form('step2', 'method': 'post') }}
                        <label>Fullname</label>
                        {{ text_field("fullname", "size": 50, "required": true, "autofocus": true, "placeholder": "Bruce Willis", "value": '') }}

                        <label>E-mail</label>
                        {{ email_field("email", "size": 50, "required": true, "placeholder": "yourmail@mail.com", "value": '') }}

                        <label>Password</label>
                        {{ password_field("password", "size": 50, "required": true, "placeholder": "Your password") }}

                        {{ hidden_field("step", "value": 2) }}

                        {{ submit_button('Next step') }}
                    {{ endForm() }}
                </div>
                <div class="col-lg-5"></div>
            </div>
        </div>
    </div>
{% endblock %}

