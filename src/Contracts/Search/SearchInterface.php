<?php

/**
 * Copyright 2016 Cloud Creativity Limited
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace CloudCreativity\LaravelJsonApi\Contracts\Search;

use CloudCreativity\JsonApi\Contracts\Pagination\PageInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Neomerx\JsonApi\Contracts\Encoder\Parameters\EncodingParametersInterface;

/**
 * Interface EloquentFilterInterface
 * @package CloudCreativity\LaravelJsonApi
 */
interface SearchInterface
{

    /**
     * @param Builder $builder
     * @param EncodingParametersInterface $parameters
     * @return Collection|PageInterface|Model|null
     */
    public function search(Builder $builder, EncodingParametersInterface $parameters);
}
