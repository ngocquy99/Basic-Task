Vue.http.headers.common['X-CSRF-TOKEN'] = $("#token").attr("value");

new Vue({
// khoi tao xac dinh 
  el: '#manage-vue',

  data: {
      items: [],
      // max dinh voi page 
    pagination: {
        total: 0, 
        per_page: 2,
        from: 1, 
        to: 0,
        current_page: 1
      },
    offset: 4, // ????
    formErrors:{},
    formErrorsUpdate:{},
    newItem : {'title':'','description':'','maker':''},
    fillItem : {'title':'','description':'','maker':'','id':''}
  },
  // sau khi  khoi tao 
  computed: {
      isActived: function () {
          // xac dinh gia tri page hien tai 
          // sau khi khoi tao gia tri -= 1
            return this.pagination.current_page;
        },
      pagesNumber: function () {
            // 0 , null ,
            if (!this.pagination.to) {
                return [];
            }
            var from = this.pagination.current_page - this.offset;
            if (from < 1) {
                from = 1;
            }
            var to = from + (this.offset * 2);
            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page;
            }
            var pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },

    ready: function () {
         // sau khi khoi to  ham ready se xe call getVueItems 
  		this.getVueItems(this.pagination.current_page);
  },

  methods : {
     
      getVueItems: function (page) {
          this.$http.get('/vueitems?page=' + page).then((response) => {
            let obj =  JSON.parse(response.data)
              this.$set('items', obj.data.data);
            this.$set('pagination',obj.pagination );
          });
        },

        createItem: function(){
		  var input = this.newItem;
		  this.$http.post('/vueitems',input).then((response) => {
		    this.changePage(this.pagination.current_page);
			this.newItem = {'title':'','description':'','maker':''};
			$("#create-item").modal('hide');
			toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
		  }, (response) => {
			this.formErrors = response.data;
	    });
	},

      deleteItem: function(item){
        this.$http.delete('/vueitems/'+item.id).then((response) => {
            this.changePage(this.pagination.current_page);
            toastr.success('Item Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        });
      },

      editItem: function(item){
          this.fillItem.title = item.title;
          this.fillItem.id = item.id;
          this.fillItem.description = item.description;
          this.fillItem.maker = item.maker;
          $("#edit-item").modal('show');
      },

      updateItem: function(id){
        var input = this.fillItem;
        this.$http.put('/vueitems/'+id,input).then((response) => {
            this.changePage(this.pagination.current_page);
            this.fillItem = {'title':'','description':'','maker':'','id':''};
            $("#edit-item").modal('hide');
            toastr.success('Item Updated Successfully.', 'Success Alert', {timeOut: 5000});
          }, (response) => {
              this.formErrorsUpdate = response.data;
          });
      },

      changePage: function (page) {
          // khi nguoi dung click vao gia tri page  goi toi ham changePage
          // set lai current page 
          this.pagination.current_page = page;
          // lay lai du lieu theo current page moi 
          this.getVueItems(page);
      }

  }

});
