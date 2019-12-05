class gdMap {
    constructor(id) {
        this.id = id;
        this.initArr = ['map'];
        this.options_map = {
            resizeEnable: true,
            zoom: 11
            // mapStyle:'amap://styles/dark',
            // features: ["bg", "point", "road", "building"],
            // showBuildingBlock:true,
        };
    }

    /**
     * @method
     * @description 初始化服务
     */
    init(initArr = []) {
        if (!this.id) {
            return console.error('pleace set id')
        }

        function upCase(val, len = 1) {
            return val.slice(0, len).toUpperCase() + val.slice(len)
        }
        let plugins = initArr.map(v => {
            return 'AMap.' + upCase(v)
        })
        // console.log(plugins)
        AMap.plugin(plugins, res => {})
        this.initArr = this.initArr.concat(initArr);
        // console.log(AMap)
        this.initArr.forEach(v => {
            v = upCase(v);
            let target = `init${v}`
            if (!Reflect.has(AMap, v)) {
                console.error(`${target} fail,AMap not exist ${v}!`)
            } else if (Reflect.has(this, target)) {
                console.warn('gdMap init ', v)
                this[target]();
            } else {
                console.error(`${v} is undefined`)
                // throw new Error(`${v} is undefined`) // 会终止循环
            }
        })
        console.warn('gdMap init finish')
        console.log(this)
    }

    /**
     * @method
     * @description 初始化地图
     */
    initMap(options = {}) {
        this.options_map = Object.assign(this.options_map, options);
        this.map = new AMap.Map(this.id, this.options_map);
    }

    /**
     * @method
     * @description 初始化点标记
     */
    initMarker(options = {}) {
        this.options_marker = Object.assign({
            map: this.map
        }, options);
        this.marker = new AMap.Marker(this.options_marker);
    }

    /**
     * @method
     * @description
     */
    initPlaceSearch(options = {}) {
        this.options_placeSearch = Object.assign({
            map: this.map
        }, options);
        this.placeSearch = new AMap.PlaceSearch(this.options_placeSearch);
        this.searchByKeyword = (keyword) => {
            return new Promise((resolve, reject) => {
                this.placeSearch.search(keyword, (status, res) => {
                    console.log(res)
                    let data = {
                        code: 200,
                        data: res,
                        info: '查询成功'
                    }
                    switch (status) {
                        case 'error':
                            data.code = 500;
                            data.info = res;
                            break;
                        case 'no_data':
                            data.code = 404;
                            data.info = '未找到';
                            break;
                    }
                    resolve(data)
                })
            })
        }
    }
}

export default gdMap;