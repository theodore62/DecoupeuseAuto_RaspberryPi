<div id="modal-annuler" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-body">
            <h1>Voulez-vous annuler la découpe ?</h1>
        </div>
        <div class="uk-modal-footer uk-text-right">
            <form class="pure-form pure-form-stacked" id="maform" method="GET" action="{{ url('/') }}">
                @csrf
                <button class="btn btn-primary  btn-lg uk-modal-close" type="button">Non</button>
                <button class="btn btn-danger  btn-lg" type="submit">Oui</button>
            </form>
        </div>
    </div>
</div>