{{-- PAD numérique du clavier decoupe --}}
<div id="modal-pad-decoupe" class="modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
              <div class="uk-grid-small  uk-child-width-1-1 uk-text-center" uk-grid>
                <div class="input-group mb-2 resultatChiffre">     
                    {{-- <input >        --}}
                    <button type="button" class="btn btn-outline-light  btn-lg" name="reset" value="reset"  id="reset" onclick="javascript:reset('calc','reset');">
                        <img class="icon" src="{{ Vite::asset('resources/images/reset.png') }}" alt="" srcset="">
                        {{-- <img src="{{ asset("storage/image/reset.png")}}" class="iconkeyboard" alt="" srcset=""> --}}
                    </button>          
                      <input type="text" id="calc" class="form-control" value=''placeholder="">
                    
                </div>
            <div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="1" value="7"  id="7" onclick="javascript:affichage('calc','7');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="2" value="8"  id="8" onclick="javascript:affichage('calc','8');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="3" value="9"  id="9" onclick="javascript:affichage('calc','9');">
                </div>
            </div>
            <div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="1" value="4"  id="4" onclick="javascript:affichage('calc','4');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="2" value="5"  id="5" onclick="javascript:affichage('calc','5');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="3" value="6"  id="6" onclick="javascript:affichage('calc','6');">
                </div>
                </div>
            <div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="1" value="1"  id="1" onclick="javascript:affichage('calc','1');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="2" value="2"  id="2" onclick="javascript:affichage('calc','2');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="3" value="3"  id="3" onclick="javascript:affichage('calc','3');">
                </div>
            </div>
            <div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="0" value="0"  id="0" onclick="javascript:affichage('calc','0');">
                    <button type="button" class="btn btn-outline-light  btn-lg" name="supp" value="supp"  id="supp" onclick="javascript:affichage('calc','');">
                        <img class="icon" src="{{ Vite::asset('resources/images/delete.png') }}" alt="" srcset="">
                        {{-- <img src="{{ asset("storage/image/delete.png")}}" class="iconkeyboard" alt="" srcset=""> --}}
                    </button>
                    {{-- <input type="button" class="btn btn-outline-light  btn-lg" name="supp" value="supp"  id="supp" onclick="javascript:affichage('calc','');"> --}}
                </div>
            </div>
        </div>     


        <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close  btn-lg" type="button">Cancel</button>
            <button class="uk-button uk-button-primary  btn-lg" type="button" onclick="javascript:validerDecoupe('calc');">Save</button>
        </p>
    </div>
</div>


{{-- PAD numérique du clavier  longueur--}}
<div id="modal-pad-longueur" class="modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
              <div class="uk-grid-small  uk-child-width-1-1 uk-text-center" uk-grid>
                <div class="input-group mb-2 resultatChiffre">     
                    <button type="button" class="btn btn-outline-light  btn-lg" name="reset" value="reset"  id="reset" onclick="javascript:reset('calc2','reset');">
                        {{-- <img src="{{ asset("storage/image/reset.png")}}" class="iconkeyboard" alt="" srcset=""> --}}
                        <img class="icon" src="{{ Vite::asset('resources/images/reset.png') }}" alt="" srcset="">
                    </button>                 
                      <input type="text" id="calc2" class="form-control" value=''placeholder="">
                    
                </div>
            <div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="1" value="7"  id="7" onclick="javascript:affichage('calc2','7');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="2" value="8"  id="8" onclick="javascript:affichage('calc2','8');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="3" value="9"  id="9" onclick="javascript:affichage('calc2','9');">
                </div>
            </div>
            <div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="1" value="4"  id="4" onclick="javascript:affichage('calc2','4');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="2" value="5"  id="5" onclick="javascript:affichage('calc2','5');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="3" value="6"  id="6" onclick="javascript:affichage('calc2','6');">
                </div>
                </div>
            <div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="1" value="1"  id="1" onclick="javascript:affichage('calc2','1');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="2" value="2"  id="2" onclick="javascript:affichage('calc2','2');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="3" value="3"  id="3" onclick="javascript:affichage('calc2','3');">
                </div>
            </div>
            <div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="0" value="0"  id="0" onclick="javascript:affichage('calc2','0');">
                    <button type="button" class="btn btn-outline-light  btn-lg" name="supp" value="supp"  id="supp" onclick="javascript:affichage('calc2','');">
                        {{-- <img src="{{ asset("storage/image/delete.png")}}" class="iconkeyboard" alt="" srcset=""> --}}
                        <img class="icon" src="{{ Vite::asset('resources/images/delete.png') }}" alt="" srcset="">
                    </button>
                    {{-- <input type="button" class="btn btn-outline-light  btn-lg" name="supp" value="supp"  id="supp" onclick="javascript:affichage('calc2','');"> --}}
                </div>
            </div>
        </div>     


        <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close  btn-lg"type="button">Cancel</button>
            <button class="uk-button uk-button-primary  btn-lg" type="button" onclick="javascript:validerLongueur('calc2');">Save</button>
        </p>
    </div>
</div>
