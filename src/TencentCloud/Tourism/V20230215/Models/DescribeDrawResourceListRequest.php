<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tourism\V20230215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDrawResourceList请求参数结构体
 *
 * @method integer getPageNumber() 获取PageNumber
 * @method void setPageNumber(integer $PageNumber) 设置PageNumber
 * @method integer getPageSize() 获取PageSize
 * @method void setPageSize(integer $PageSize) 设置PageSize
 */
class DescribeDrawResourceListRequest extends AbstractModel
{
    /**
     * @var integer PageNumber
     */
    public $PageNumber;

    /**
     * @var integer PageSize
     */
    public $PageSize;

    /**
     * @param integer $PageNumber PageNumber
     * @param integer $PageSize PageSize
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
