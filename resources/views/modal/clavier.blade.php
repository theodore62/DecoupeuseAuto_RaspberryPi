{{--  clavier  --}}
<div id="modal-clavier"  class="modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
              <div class="uk-grid-small  uk-child-width-1-1 uk-text-center" uk-grid>
                <div class="input-group mb-2 resultatChiffre">      
                    <button type="button" class="btn btn-outline-light  btn-lg" name="reset" value="reset"  id="reset" onclick="javascript:reset('affichageClavier','reset');">
                        {{-- <img src="{{ asset("storage/image/reset.png")}}" class="iconkeyboard" alt="" srcset=""> --}}
                        <img class="icon" src="{{ Vite::asset('resources/images/reset.png') }}" alt="" srcset="">
                    </button>              
                      <input type="text" id="affichageClavier" class="form-control" value=''placeholder="">
                    
                </div>
            <div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="a" value="a"  id="a" onclick="javascript:affichageClavier('affichageClavier','a');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="z" value="z"  id="z" onclick="javascript:affichageClavier('affichageClavier','z');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="e" value="e"  id="e" onclick="javascript:affichageClavier('affichageClavier','e');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="r" value="r"  id="r" onclick="javascript:affichageClavier('affichageClavier','r');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="t" value="t"  id="t" onclick="javascript:affichageClavier('affichageClavier','t');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="y" value="y"  id="y" onclick="javascript:affichageClavier('affichageClavier','y');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="u" value="u"  id="u" onclick="javascript:affichageClavier('affichageClavier','u');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="i" value="i"  id="i" onclick="javascript:affichageClavier('affichageClavier','i');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="o" value="o"  id="o" onclick="javascript:affichageClavier('affichageClavier','o');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="p" value="p"  id="p" onclick="javascript:affichageClavier('affichageClavier','p');">
                    <button type="button" class="btn btn-outline-light  btn-lg" name="supp" value="supp"  id="supp" onclick="javascript:affichageClavier('affichageClavier','');">
                        {{-- <img src="{{ asset("storage/image/delete.png")}}" class="iconkeyboard" alt="" srcset=""> --}}
                        <img class="icon" src="{{ Vite::asset('resources/images/delete.png') }}" alt="" srcset="">
                    </button>
                    {{-- <input type="button" class="btn btn-outline-light  btn-lg" name="supp" value="supp"  id="supp" onclick="javascript:affichageClavier('affichageClavier','');"> --}}
                </div>
            </div>
            <div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="q" value="q"  id="q" onclick="javascript:affichageClavier('affichageClavier','q');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="s" value="s"  id="s" onclick="javascript:affichageClavier('affichageClavier','s');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="d" value="d"  id="d" onclick="javascript:affichageClavier('affichageClavier','d');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="f" value="f"  id="f" onclick="javascript:affichageClavier('affichageClavier','f');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="g" value="g"  id="g" onclick="javascript:affichageClavier('affichageClavier','g');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="h" value="h"  id="h" onclick="javascript:affichageClavier('affichageClavier','h');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="j" value="j"  id="j" onclick="javascript:affichageClavier('affichageClavier','j');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="k" value="k"  id="k" onclick="javascript:affichageClavier('affichageClavier','k');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="l" value="l"  id="l" onclick="javascript:affichageClavier('affichageClavier','l');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="m" value="m"  id="m" onclick="javascript:affichageClavier('affichageClavier','m');">
                </div>
                </div>
            <div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="w" value="w"  id="w" onclick="javascript:affichageClavier('affichageClavier','w');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="x" value="x"  id="x" onclick="javascript:affichageClavier('affichageClavier','x');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="c" value="c"  id="c" onclick="javascript:affichageClavier('affichageClavier','c');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="v" value="v"  id="v" onclick="javascript:affichageClavier('affichageClavier','v');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="b" value="b"  id="b" onclick="javascript:affichageClavier('affichageClavier','b');">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="n" value="n"  id="n" onclick="javascript:affichageClavier('affichageClavier','n');">
                </div>
            </div>
            <div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <input type="button" class="btn btn-outline-light  btn-lg" name="espace" value="espace"  id="espace" onclick="javascript:affichageClavier('affichageClavier',' ');">  
                </div>
            </div>
        </div>     


        <p class="uk-text-right">            
            <button class="uk-button uk-button-danger uk-modal-close  btn-lg" type="button">Cancel</button>
            <button class="uk-button uk-button-primary  btn-lg" type="button" onclick="javascript:validerNom('affichageClavier');">Save</button>
        </p>
    </div>
</div>
