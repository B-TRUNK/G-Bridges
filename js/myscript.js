var countryOjb = 
{
    init:function()
    {
        var that = this;
        this.load_country(); 
        document.getElementById('country').addEventListener('change',function()
        {
            that.load_state(this.value);
            document.getElementById('state').innerHTML = '';
        });
        document.getElementById('state').addEventListener('change',function()
        {
            that.load_city(this.value);
        });
    },
    load_country:function()
    {
        var load = new XMLHttpRequest();
        load.open('GET','http://localhost/gcp/db/countries.php',true);
        load.onload = function()
        {
            var allCountries = JSON.parse(load.responseText);
            allCountries.forEach(function(value)
            {
                 var opt = document.createElement('option');
                 opt.innerText = value.name;
                 opt.setAttribute('value',value.id);
                 document.getElementById('country').appendChild(opt);
            });
        }
        load.send();
    },
    load_state:function(id)
    {
        document.getElementById('city').innerHTML = '';
        var load = new XMLHttpRequest();
        load.open('GET','http://localhost/gcp/db/getstate.php?country_id='+id,true);
        load.onload = function()
        {
            var allCountries = JSON.parse(load.responseText);
            allCountries.forEach(function(value)
            {
                 var opt = document.createElement('option');
                 opt.innerText = value.name;
                 opt.setAttribute('value',value.id);
                 document.getElementById('state').appendChild(opt);
            });
        }   
        load.send();
    },
    load_city:function(id)
    {
        document.getElementById('city').innerHTML = '';
        var load = new XMLHttpRequest();
        load.open('GET','http://localhost/gcp/db/getcity.php?state_id='+id,true);
        load.onload = function()
        {
            var allCountries = JSON.parse(load.responseText);
            allCountries.forEach(function(value)
            {
                 var opt = document.createElement('option');
                 opt.innerText = value.name;
                 opt.setAttribute('value',value.id);
                 document.getElementById('city').appendChild(opt);
            });
        }   
        load.send();
    }
}
countryOjb.init();