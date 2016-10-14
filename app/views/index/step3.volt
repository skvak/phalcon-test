{% extends "layouts/main.volt" %}

{% block title %}
    Step 3
{% endblock %}

{% block content %}
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-2">
                    <p>{{ flashSession.output() }}</p>
                    {{ form('register', 'method': 'post') }}
                        <label>Interests</label>
                        {{ text_field("interests", "size": 50, "required": true, "placeholder": "Your interests", "value": '') }}

                        {{ submit_button('Register') }}
                    {{ endForm() }}
                </div>
                <div class="col-lg-5"></div>
            </div>
        </div>
    </div>
{% endblock %}

