{% extends "layouts/main.volt" %}

{% block title %}
    Step 2
{% endblock %}

{% block content %}
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-2">
                    <p>{{ flashSession.output() }}</p>
                    {{ form('step3', 'method': 'post') }}
                        <label>City</label>
                        {{ text_field("city", "size": 50, "required": true, "placeholder": "Your city", "value": '') }}

                        <label>Address</label>
                        {{ text_field("address", "size": 50, "required": true, "placeholder": "Your address", "value": '') }}

                        {{ hidden_field("step", "value": 3) }}
                        <br><br>
                        {{ submit_button('Next step') }}
                    {{ endForm() }}
                </div>
                <div class="col-lg-5"></div>
            </div>
        </div>
    </div>
{% endblock %}

