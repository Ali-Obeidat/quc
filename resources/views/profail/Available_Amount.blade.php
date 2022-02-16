<x-profial_master>

@section('content')
<h4>Choose Your Estimated Available Amount for Trading in the next 12 months (USD)</h4>
        
        <div class="container">
        <form action="/quc/create-step3" method="post" class="col-12">
        {{ csrf_field() }}
        <div class="row col-12">
                <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">

                    <label style="margin-left: 5px;" class="radio-button">
                        <input value="Between $0 and $5,000" type="radio" class="radio-button__input" id="Available_Amount-1" name="Available_Amount">
                        <span class="radio-button__control"></span>
                        <span class="radio-button__label">Between $0 and $5,000</span>
                    </label>


                </div>
                <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">
                    <label style="margin-left: 5px;" class="radio-button">
                        <input value="Between $5,001 and $10,000" type="radio" class="radio-button__input" id="Available_Amount-2" name="Available_Amount">
                        <span class="radio-button__control"></span>
                        <span class="radio-button__label">Between $5,001 and $10,000</span>
                    </label>
                </div>

            </div>
            <div class="row col-12">
                <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">

                    <label style="margin-left: 5px;" class="radio-button">
                        <input value="Between $10,001 and $50,000" type="radio" class="radio-button__input" id="Available_Amount-1" name="Available_Amount">
                        <span class="radio-button__control"></span>
                        <span class="radio-button__label">Between $10,001 and $50,000</span>
                    </label>


                </div>
                <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">
                    <label style="margin-left: 5px;" class="radio-button">
                        <input value="Between $50,001 and $100,000" type="radio" class="radio-button__input" id="Available_Amount-2" name="Available_Amount">
                        <span class="radio-button__control"></span>
                        <span class="radio-button__label">Between $50,001 and $100,000</span>
                    </label>
                </div>

            </div>
            <div class="row col-12">
                <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">

                    <label style="margin-left: 5px;" class="radio-button">
                        <input value="Between $100,001 and $250,000" type="radio" class="radio-button__input" id="Available_Amount-1" name="Available_Amount">
                        <span class="radio-button__control"></span>
                        <span class="radio-button__label">Between $100,001 and $250,000</span>
                    </label>


                </div>
                <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option">
                    <label style="margin-left: 5px;" class="radio-button">
                        <input value="Between $250,001 and $500,000" type="radio" class="radio-button__input" id="Available_Amount-2" name="Available_Amount">
                        <span class="radio-button__control"></span>
                        <span class="radio-button__label">Between $250,001 and $500,000</span>
                    </label>
                </div>

            </div>
            <div class="row col-12">
                <div style="display: flex;
              justify-content: start; " class="col-lg-3 col-md-5  col-ms-12 option">

                    <label style="margin-left: 5px;" class="radio-button">
                        <input value="More than $500,001" type="radio" class="radio-button__input" id="Available_Amount-1" name="Available_Amount">
                        <span class="radio-button__control"></span>
                        <span class="radio-button__label">More than $500,001</span>
                    </label>


                </div>
                <div style="display: flex;
              justify-content: start;" class="col-lg-3 col-md-5  col-ms-12 option1" >
                   
                </div>




            </div>
            <div class="row col-12 botton">


                <button type="button" style="display: flex;
               justify-content: center;" class="col-lg-3 col-md-5  col-ms-12 Back">Back</button>




                <button type="submit" type="button" style="display: flex;
              justify-content: center;" class="col-lg-3 col-md-5  col-ms-12 Continue2">Continue</button>

            </div>

        </div>
        </form>
@endsection
</x-profial_master>