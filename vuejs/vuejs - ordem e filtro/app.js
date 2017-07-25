new Vue ({
	el: '#app',
	data() {
			return {
				colunas: ["titulo","nota"],
				notasInfo: [
					{ titulo: 'Suits', nota: 86 },
					{ titulo: 'Game of Thrones', nota: 95 },
					{ titulo: 'Orange Is the New Black', nota: 82 },
					{ titulo: 'The Walking Dead', nota: 85 },
					{ titulo: 'Doctor Who', nota: 88 },
					{ titulo: 'Stranger Things', nota: 89 },
					{ titulo: 'Twin Peaks', nota: 88 },
					{ titulo: 'Breaking Bad', nota: 95 },
					{ titulo: 'Friends', nota: 94 },
					{ titulo: 'House of Cards', nota: 90 },
					{ titulo: 'Westworld', nota: 90 },
					{ titulo: 'Salvation', nota: 68 },
					{ titulo: '13 Reasons Why', nota: 85 },
					{ titulo: 'Outlander', nota: 85 },
					{ titulo: 'Fargo', nota: 90 },
				],
				filterText: '',
			}
		},
		methods: {
			ordenarMenor() {
				this.notasInfo.sort((a,b) => a.nota > b.nota ? 1 : -1);
			},
			ordenarMaior() {
				this.notasInfo.sort((a,b) => a.nota < b.nota ? 1 : -1);
			}
		},
 		computed: {
    			filmesFiltrados() {
      			let filter = new RegExp(this.filterText, 'i')
      			return this.notasInfo.filter(el => el.titulo.match(filter))
    		}
  		}
});