<div id="modal-success" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-body">
            <h1>La découpe à fini avec succés.</h1>
        </div>
        <div class="uk-modal-footer uk-text-right">
            <form class="pure-form pure-form-stacked" id="maform" method="GET" action="{{ url('/') }}">
                @csrf
                <button class="btn btn-success  btn-lg" type="submit">OK</button>
            </form>
        </div>
    </div>
</div>