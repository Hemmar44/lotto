let selections = [
    
    {number:1, disabled:false},
    {number:2, disabled:false},
    {number:3, disabled:false},
    {number:4, disabled:false},
    {number:5, disabled:false}
];
    
    



Vue.component('duzy', {
  
    template: 
    `<div>
        <div class="board">
            <button v-for="selection in selections" 
               v-bind:value="selection.number"
               v-bind:disabled="selection.disabled"
               v-on:click="select(selection)" 
               class="custom-btn">
    
                {{ selection.number }}
    
            </button>
        </div>
        <div v-if='selected' class="selected">
            <button v-for="number in selected"
               class="custom-btn"
               v-bind:disabled="!number.disabled"
               v-on:click="unselect(number)">
    
                {{number.number}}
    
            </button>
        </div>
                
    </div>`,
    
    data() {
        
        return {
            
            selections: selections,
            selected:[]
            
        };
    },
    
    computed: {
       
    },
    
    methods: {
        
        select(selection){
            
           selection.disabled = true;
           this.selected.push(selection);
            
        },
        
        unselect(number) {
            
            
            this.selections.forEach(function(item){
                
                if(item.number===number.number){
                    
                    item.disabled=false;
                    
                }
            });
                    
        }
    }
   
});


let app = new Vue({
    
    el:'#app'
    
   
    
    
    
    
});



