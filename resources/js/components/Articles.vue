<template>
	<div>
	<table id="example" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Image</th>
				<th>Title</th>
				<th>Manufacturer</th>
				<th>Category</th>
				<th>Item code</th>
				<th>Price</th>
				<th>Amount</th>
				<th>Status</th>
				<th>Tax</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr v-bind:key="article.id" v-for="(article, index) in items">
				<td class="align-middle" v-text="article.id"></td>
				<!-- <td class="align-middle text-center" style="padding: 0px; width: 50px; height: 50px;">
					<a href="#">
						<img  style="padding: 0px; width: 50px; height: 50px;" style="padding: 3px;"
							src="{{ file_exists(public_path().asset('/images/'). $article->image) ?
							asset('/images').'/'. $article->image :
							asset('/images'). '/no-image.png'  }}" alt="{{ $article->title }}">
					</a>
				</td>-->
				<td></td>
				<td class="align-middle">{{article.title}}</td>
				<td class="align-middle">{{ article.manufacturer }}</td>
				<td class="align-middle">{{ article.category.title }}</td>
				<td class="align-middle">{{ article.code }}</td>
				<td class="align-middle text-right">{{ article.price | currency }}</td>
				<td class="align-middle text-right">{{ article.amount | number }}</td>
				<td class="align-middle text-center">
					<input type="checkbox" id="checkbox"
						
						:checked="article.active"
						@change="article.active = !article.active"
						@click="changeStatus(article.slug, article.active)">
				</td>
				<td class="align-middle">{{ article.tax }}</td>
				<td class="align-middle text-center" style="min-width: 70px;">
					<div class="input-group">
						<a class="btn btn-primary btn-xs" :href="'/tp-admin/articles/'+article.slug+'/edit'"><i class="fa fa-edit"></i></a>
						<a @click="destroy(article.slug, index)" style="margin-left: 5px;" class="btn btn-danger btn-xs">
							<i class="fa fa-trash"></i>
						</a>
						<!-- <form style="display: inline-block; padding: 0px;" action="/tp-admin/articles/{{ $article->slug }}" method="POST">
							@csrf
							@method('DELETE')
							<button style="margin-left: 5px;" class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash"></i></button>
						</form> -->
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	<paginator :dataSet="dataSet" @changed="fetch"></paginator>
	</div>
</template>

<script>

	export default {

		data() {
			return {
				dataSet: false,
				// items: []
			}
		},

		created() {
			this.fetch();
		},


		methods: {
			fetch(page) {
				axios.get(this.url(page)).then(this.refresh);
			},

			url(page) {

				if (! page) {
					let query = location.search.match(/page=(\d+)/);

					page = query ? query[1] : 1;
				}

				return `${location.pathname}?page=`+page;
			},

			refresh({data}) {
				this.dataSet = data;
				this.items = data.data;

				window.scrollTo(0, 0);
			},

			changeStatus(id, checked) {
				axios.post("/tp-admin/articles/" + id + "/activate", {
					active: !checked,
					_method: 'patch'
				});
			},

			destroy(id, item) {

				axios.post("/tp-admin/articles/" + id, {
					_method: 'delete'
				});
				
				this.items.splice(item, 1);

			}

		}
	}
</script>