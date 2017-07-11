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
            <input type='text' v-for="number in selected"
                v-on:click="unselect(number)"
                v-bind:value="number.number"
                class="custom-btn"
                v-bind:disabled="!number.disabled">
        </div>
            <input type="submit" 
                   value="Prześlij" 
                   class="button is-primary" 
                   v-if='seen'
                   v-on:click.prevent='save'>
         
    </div>`,
    
    data() {
        
        return {
            
            
            selected:[]
            
            
            
            
            
        };
    },
    
    computed: {
       
       selections() {
           
            let numbers = [];
  
            for(let i = 1; i <=49; i++){
    
                numbers.push(
                {'number': i, 'disabled': false}
                );
                
            }
        
        
        return numbers;
        },
        
        seen() {
            
            if(this.selected.length === 6) {
                
                return true;
            }
            
            return false;
        }
       
    },
    
    
    methods: {
        
        select(selection){
            
           selection.disabled = true;
           
           if(this.selected.length < 6) {
                
                
                this.selected.push(selection);
                this.selected.sort(function(a, b) {
                    return Number(a.number) - Number(b.number);
                });
           
           }
           
           
          else {
              
              selection.disabled = false;
              this.selected.splice(6,1);
              alert('Nie możesz dodać więcej liczb');
          }
           
            
        },
        
        unselect(number) {
            
            let position;
            
            this.selected.forEach((item, index)=>{
                
                
                if(item.number===number.number){
                    
                    position = index;
                    item.disabled=false;
                    
                }
                
            });
            
            this.selected.splice(position, 1);
                    
        },
        
        save() {
            
            alert('save');
        }
    }
   
});


let app = new Vue({
    
    el:'#app'
    
    
    
    
    
    
});



