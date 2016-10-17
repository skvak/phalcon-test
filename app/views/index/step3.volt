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
                        <div id="form">
                            {{ text_field("interests[]", "size": 50, "required": true, "placeholder": "Your interests", "value": '') }}
                        </div>
                        <input type="button" onclick="add_input()" value="Add field" /><br><br>
                        {{ hidden_field("step", "value": 3) }}
                        {{ hidden_field(security.getTokenKey(), "value": security.getToken()) }}
                        {{ submit_button('Register') }}
                    {{ endForm() }}
                </div>
                <div class="col-lg-5"></div>
            </div>
        </div>
    </div>
{% endblock %}

{% block scripts %}
   {{ super() }}
    <script>
        function add_input(){
            document.getElementById('form').innerHTML+='<br><br><input type=text name="interests[]" size="50" required placeholder="Your interests">'
        }
    </script>
{% endblock %}

